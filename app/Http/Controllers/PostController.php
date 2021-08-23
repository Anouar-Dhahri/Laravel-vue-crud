<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return response()->json($posts);
    }

    public function add(Request $request){
        $request->validate([
            'title'=> 'required',
            'description' => 'required'
        ]);

        $post = new Post([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $post->save();

        return response()->json('The post successfully added');
    }

    public function edit($id){
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update($id, Request $request){
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('The post successfully updated');
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return response()->json('The post successfully deleted');
    }
}
