<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Auth\Events\Validated;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::orderBy('id', 'DESC')->get();
        return view('comment',['comments' => $comments]);
    }

    public function store(CommentStoreRequest $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);
        Comment::create($data);
        return redirect()->route('home');
    }

}
