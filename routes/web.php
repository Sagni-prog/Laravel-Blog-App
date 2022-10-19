<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PhotoController;


Route::post('reset_password',[AdminController::class,'resetPassword'])->name('reset_password');
Route::get('router',[RouteController::class,'route']);

Route::get('single_article/{article}',[RouteController::class,'showSingleBlog']);

Route::get('/add_photo',function(){
  return view('add_photo');
});

Route::post('/add_photo',[PhotoController::class,'store'])->name('add_photo');


Route::get('Admin/register',[RouteController::class,'register_admin']);
 Route::get('/',[ArticleController::class,'index']);
Route::get('/articles/catagory/{catagory_name}',[CatagoryController::class,'index']);
Route::get('/articles/all_catagory',[CatagoryController::class,'allCatagory']);
Route::get('/article/add',[RouteController::class,'showAddArticle']);
Route::post('/article/add',[ArticleController::class,'store'])->name('article/add');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/article_like/{article}',[LikeController::class,'like']);
    
    Route::post('article/comment/{article}',[CommentController::class,'comment'])->name('article/comment');
    
    Route::get('/reset_passwod',[RouteController::class,'showPasswordReset']);
    Route::get('/dashboard',[RouteController::class,'showDashboard'])->name('dashboard');
});


