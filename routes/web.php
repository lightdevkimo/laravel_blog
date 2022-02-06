<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
|
*/
///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

//Show All Categories

Route::get('/', [HomeController::class, 'show'])->name('home');

//Add New Category View

Route::get('/addcategory', function () {return view('addcategory');});

//Add New Category Action

Route::post('/cats/save', [CategoryController::class, 'save'])->name('categories.save');


Route::get('/editcategory/{id}', [CategoryController::class, 'fetch_category'])->name('fetch_category');

Route::post('/edit/', [CategoryController::class, 'update_category'])->name('update_category');
//Delete Category With All of The Blogs Related To it

Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete_category');

///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
|
*/
///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////


//Show View Of add Blog And get Categories Which Will Be Assigned To this  New Blog
Route::get('/addblog', [BlogController::class, 'get_cat']);

//Add New Blog Action
Route::post('/blogs/save', [BlogController::class, 'save'])->name('blogs.save');

//Update Blog View
Route::get('/editblog/{id}', [BlogController::class, 'fetch_blog'])->name('fetch_blog');

//Update Blog Action
Route::post('/update_blog', [BlogController::class, 'update_blog'])->name('update_blog');

//Delete Blog Action
Route::get('/deleteblog/{id}', [BlogController::class, 'deleteBlog'])->name('delete_blog');


Route::get('/show/{slug}', [CategoryController::class, 'show_category'])->name('show_category');


