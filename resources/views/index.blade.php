@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                  Want to find new recipes?
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div >
            <img src="https://previews.123rf.com/images/moscowbear/moscowbear1801/moscowbear180100035/94433067-%EC%9D%8C%EC%8B%9D-%EB%B8%94%EB%A1%9C%EA%B7%B8-%EA%B0%9C%EB%85%90%EC%9E%85%EB%8B%88%EB%8B%A4-%EB%85%B9%EC%83%89-%EB%B0%B0%EA%B2%BD%EC%97%90-%EC%8B%9D%EC%82%AC%EB%A5%BC-%EC%A0%9C%EA%B3%B5%ED%95%98%EB%8A%94-%EC%95%BC%EC%B1%84.jpg" width="400" height="100" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Are you lacking in your cooking skills?
            </h2>



            <p class="font-extrabold text-gray-600 text-s pb-9">
                Check out the blogs below to learn about our recipes they are easy to follow
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
           What you'll find on our website
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Recipes
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Reviews
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Tutorials
        </span>

    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">







        @foreach($posts->slice(0,2) as $post)

            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    {{$post->title}}
                </span>

                    <h3 class="text-xl font-bold py-10">
                        {{Str::limit($post->description,150, $end='.....')}}
                    </h3>

                    <a
                        href="/blog/{{$post->slug}}"
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>

                </div>
            </div>
        @endforeach




        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>

@endsection
