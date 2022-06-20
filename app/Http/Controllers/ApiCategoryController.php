<?php


namespace App\Http\Controllers;

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
        $category->title = $request->input('category.title');
        $category->sort_id = $request->input('category.sort_id');
        
       
        
       
        $category->save();

        return response()->json('Категория успешно создана');
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
    {
        $category = Category::findOrFail($id);

        
        $category ->title = $request->input('category.title');
        $category->sort_id = $request->input('category.sort_id');
        
       
        $category->update();

        return response()->json('Категория успешно обнавлена');
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
                    
                    $category->delete();
                    return response()->json('Пост удалён');
            }
    }
}
