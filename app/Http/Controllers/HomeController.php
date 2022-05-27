<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $categories = Category::orderBy('sort_id', 'asc')->get();
        $posts = Post::where('visibility', 1)
        ->latest()
        ->get();

        
        return view('index', ['categories'=>$categories, 'posts'=>$posts]);
        
    }
}
