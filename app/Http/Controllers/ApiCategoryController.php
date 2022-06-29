<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category; 



class ApiCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
       
    }
    
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $category = new Category();
        $category->title = $request->input('title');
        $category->sort_id = $request->input('sort_id');
        
        if ($request->file('img') !== null) {
        $category -> img = $request->file('img')->store('categories', 'public');
        }
       
        $category->save();

        return response()->json('Категория успешно создана');

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    }
    public function show($id)
    {

        
        $posts = Post::where('category_id', $id)->get();
        
        if (count($posts) !== 0) {
            return response()->json('Постов нет');
        } else {
        return response()->json($posts);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {return response()->json($request);
      /*  $category = Category::findOrFail($id);
       
        if ($category -> img !== '') {
        Storage::delete($category -> img);
        } 

        $category ->title = $request->input('title');
        $category->sort_id = $request->input('sort_id');
        
        if ($request->file('img') !== null) {
        $category -> img = $request->file('img')->store('categories', 'public');
        }
        $category->update();

        return response()->json('Категория успешно обнавлена');*/
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
    
    return response()->json('Невозможно удалить. В категории есть посты');
    
   } else {
            if ($category -> img !== null) {
            Storage::delete($category -> img);
            } 
        
        $category->delete();
        return response()->json('Категория удалена');
   }
    }
}
