<?php

namespace App\Http\Controllers;

use App\Http\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function create()
    {
        return view('music');
    }

    public function store(Request $request)
    {

        $post = new Post();

        $post->name = $request->get('name');
        $post->content = $request->get('content');

        $post->save();

        return redirect()->route('music');

    }

}


