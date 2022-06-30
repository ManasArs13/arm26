<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      /*  $this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin()
    {
      return view('admin');
    }



    public function home()
    {
        $categories = Category::orderBy('sort_id', 'asc')->get();

       

        $posts = Post::where('visibility', 1)
        ->latest()
        ->get();
      
        
        return view('home', ['categories'=>$categories, 'posts'=>$posts]);
        
    }

    public function category($id)
    {
        $categories = Category::orderBy('sort_id', 'asc')->get();
        $title = Category::where('id', $id)->first();
        $posts = Post::where('category_id', $id)
        ->latest()
        ->get();

        
        return view('category', ['categories'=>$categories, 'title'=> $title, 'posts'=>$posts]);
        
    }


    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}




    public function index()
    {

      $id = Auth::id();
      $posts = Post::where('user_id', $id)
      ->latest()
      ->get();

        
        return view('index', ['posts'=>$posts]);
        
    }

    public function create()
    {
        
        $categories = Category::all();
        
        return view('create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');
        $post->user_id = Auth::id();
        $post->phone_number = $request->input('phone_number');
        $post->price = $request->input('price');
        $post->save();

        return redirect()->route('mypage.index')->with('status', 'Новый пост успешно создан');
     }


     public function edit($id)
     {
         $post = Post::where('id', $id)->first();
         
         $categories = Category::all();
 
         return view('edit', ['post'=>$post, 'categories'=>$categories]);
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
         $post->user_id = Auth::id();
         $post->phone_number = $request->input('phone_number');
         $post->price = $request->input('price');
         $post->update();
 
         return redirect()->route('mypage.index')->with('status', 'Пост обнавлён');
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
         return redirect()->route('mypage.index')->with('status', 'Пост удалён');
     }

}
