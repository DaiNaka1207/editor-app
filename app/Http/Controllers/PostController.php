<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('post.index', compact('post'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $post->fill($request->all())->save();
        return view('post.index', compact('post'));
    }

    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('upload', 'public');
        return response()->json(['location'=>"/storage/$path"]);
    }
}
