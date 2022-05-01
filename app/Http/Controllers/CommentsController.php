<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    public function store(Request $request) :RedirectResponse
    {
        $data = $request;
        $comment = new Comment();

        $comment->post_slug = $data['post_slug'];
        $comment->user = $data['user'];
        $comment->text = $data['text'];
        $comment->save();

        return back();
    }

    public function destroy(Comment $comment):RedirectResponse
    {
        $comment->delete();
        return back();
    }
}
