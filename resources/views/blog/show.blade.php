@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}

    </p>

    <div class="container mt-4">
        <h6>Share this blogpost!</h6>
        {!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->facebook()->twitter()->reddit()->whatsapp();
!!}
    </div>

    <h2 class="mt-6 text-2xl leading-10 tracking-tight font-bold text-center">Comments</h2>
    @if(isset(Auth::user()->id) )
    <div>
        <form action="/blog/{{$post->slug}}/comments" method="POST" class="mb-0">
            @csrf

            <input type="hidden" name="post_slug" class="mt-1 py-2 px-3 block w-full borded rounded-md shadow-sm" required value="{{$post->slug}}" >

            <input type="hidden" name="user" class="mt-1 py-2 px-3 block w-full borded rounded-md shadow-sm" required value="{{ Auth::user()->name }}">

            <label for="text" class="text-sm font-medium">Text</label>
            <input type="text" name="text" class="mt-1 py-2 px-3 block w-full borded rounded-md shadow-sm" required>
            <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Post</button>
        </form>
    </div>
    @endif
    <div class="mt-6">
        @foreach ($comments as $comment)
            <div class="mb-5 bg-white px-4 py-6 rounded-sm shadow-md">
                <div class="flex">

                    <div class="mr-3 flex flex-col justify-center">
                        <div>
                            <?php
                            $parts    = explode(' ', $comment->user);
                            $initials = strtoupper($parts[0][0] . $parts[count($parts) - 1][0]);
                            ?>

                            <span class="bg-gray-300 p-3 rounded-full">{{ $initials }}</span>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center">
                        <p class="mr-2 font-bold">{{ $comment->user }}</p>
                        <p class="text-gray-600">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                <div class="mt-3">
                    <p>{{ $comment->text }}</p>
                </div>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)

                <form action="/comments/{{ $comment->id }}" method="POST" class="mb-0 mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm py-1 px-2 border border-gray-400 shadow-sm rounded-md hover:shadow-md">Delete</button>
                </form>
                @endif
            </div>
        @endforeach
    </div>




</div>


@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
