<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function save(Request $request)
    {
        $blog = new Blog;
        $blog -> name = $request -> name;
        $blog -> slug = $request -> slug;
        $blog -> des = $request -> des;
        $blog -> category_id = $request -> category_id;
        $blog->save(); // INSERT INTO TABLE

        return redirect()->route('home');
        // save new category
    }

    public function get_cat()
    {
        $categories=Category::all();
        return view('addblog',['categories'=>$categories ]);
    }

    public function fetch_blog($id)
    {
        $categories=Category::all();
        $blogs = Blog::where('id',$id)->first();
        return view('editblog',['blog' => $blogs,'categories'=>$categories]);
    }

    public function update_blog(Request $request)
    {
        $blog =  Blog::find($request->id);
        $blog -> name = $request -> name;
        $blog -> slug = $request -> slug;
        $blog -> des = $request -> des;
        $blog -> category_id = $request -> category_id;
        $blog->save(); // INSERT INTO TABLE

        return redirect()->route('home');
    }

    public function deleteBlog($id)
    {
        $category = Blog::find($id);
        $category->delete();
        return redirect()->route('home');

    }
}
