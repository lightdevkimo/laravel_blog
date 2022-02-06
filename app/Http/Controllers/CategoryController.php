<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function save(Request $request)
    {
        $category = new Category;
        $category -> name = $request -> name;
        $category -> slug = $request -> slug;
        $category->save(); // INSERT INTO TABLE

        return redirect()->route('home');
        // save new category
    }


    public function fetch_category($id){
        $category = Category::where('id',$id)->first();
        return view('editcategory',['categories' => $category]);
    }


    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('home');

    }

    public function update_category(Request $request)
    {

        $category = Category::find($request->id);
        $category -> name = $request -> name;
        $category -> slug = $request -> slug;
        $category->save(); // INSERT INTO TABLE

        return redirect()->route('home');
    }

    public $slug;
    public function show_category($slug){
        $show_category=Blog::where('category_id',$slug)->get();
        return view('showbycategory',['show_products' => $show_category]);
    }
}
