<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category; 
use App\User;


class ApiPostController extends Controller
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

        foreach ($posts as $post) {
           
            $user_id = $post->user_id;
            $category_id = $post->category_id;
            
            $user = User::findOrFail($user_id);
            $post->user_id = $user->name;

            $category = Category::findOrFail($category_id);
            $post->category_id = $category->title;

        }

        return response()->json($posts);
       
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
        $post->name = $request->input('post.name');
        $post->description = $request->input('post.description');
        $post->category_id = $request->input('post.category_id');
        $post->user_id = $request->input('post.user_id');
        $post->phone_number = $request->input('post.phone_number');
        $post->price = $request->input('post.price');
        $post->save();
        
        return response()->json('Пост успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        
        return response()->json($post);
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
        $post->name = $request->input('post.name');
        $post->description = $request->input('post.description');
        $post->category_id = $request->input('post.category_id');
        $post->user_id = $request->input('post.user_id');
        $post->phone_number = $request->input('post.phone_number');
        $post->price = $request->input('post.price');
        $post->update();

        return response()->json('Пост успешно обнавлён');
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
        return response()->json('Пост успешно удалён');
    }
}
