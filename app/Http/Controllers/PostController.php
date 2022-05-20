<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('visibility', 1)
        ->latest()
        ->get();
         
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        
        return view('admin.posts.create', ['users' => $users, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');
        $post->user_id = $request->input('user_id');
        $post->phone_number = $request->input('phone_number');
        $post->price = $request->input('price');
        $post->save();

        return redirect()->route('posts.index')->with('status', 'Новый пост успешно создан');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        $users = User::all();
        $categories = Category::all();

        return view('admin.posts.edit', ['post'=>$post, 'users'=>$users, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      

        $post = Post::findOrFail($id);
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');
        $post->user_id = $request->input('user_id');
        $post->phone_number = $request->input('phone_number');
        $post->price = $request->input('price');
        $post->update();

        return redirect()->route('posts.index')->with('status', 'Пост обнавлён');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        
        $post->delete();
        return redirect()->route('posts.index')->with('status', 'Пост удалён');
    }
}
