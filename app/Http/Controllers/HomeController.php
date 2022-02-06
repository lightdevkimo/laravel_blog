<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $categories=Category::all();
        $blogs=Blog::all();
        return view('welcome',['categories'=>$categories ,'blogs'=>$blogs]);
    }
}
