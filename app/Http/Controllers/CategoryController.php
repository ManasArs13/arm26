<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;


use App\Category;
use Illuminate\Http\Request;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
       
        
        return view('admin.categories.index', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { dd($request);
        $category = new Category();
        $category->title = $request->input('title');
        $category->sort_id = $request->input('sort_id');
        
       
        $category -> img = $request->file('img')->store('image', 'public');
      
       
        $category->save();

        return redirect()->route('categories.index')->with('status', 'Новая категория добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::where('category_id', $id)->get();
      if (count($posts) !== 0) {
        return redirect()->route('posts.index', ['posts'=>$posts])->with('status', 'Посты данной категории');
      } else {
        $categories = Category::all();
        return redirect()->route('categories.index', ['categories'=>$categories])->with('danger', 'В данной категории нет постов');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.categories.edit', ['category'=>$category]);
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
       
        $category = Category::findOrFail($id);

        Storage::delete($category -> img);
        
        $category ->title = $request->input('title');
        $category->sort_id = $request->input('sort_id');
        
       
        $category -> img = $request->file('img')->store('image', 'public');
      
       
        $category->update();
        return redirect()->route('categories.index')->with('status', 'Категория обнавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        
        $posts = Post::where('category_id', $id)->get();
       
   if (count($posts) !== 0) {
    
    return redirect()->route('posts.index', ['posts'=>$posts])->with('danger', 'Невозможно удалить. В категории есть посты');
  
   } else {
        Storage::delete($category -> img);
       
        
        $category->delete();
        return redirect()->route('categories.index')->with('status', 'категория удалена');
   }
    }
}
