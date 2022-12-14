<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\CatagoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\SettingController;


Route::get('/',[HomeController::class,'getHome']);
Route::get('/router',[RouterController::class,'route']);
Route::get('post_single/{post}',[HomeController::class,'singlePost']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard',[AdminController::class,'getDashboard']);

    // catagories
    Route::get('/catagories',[CatagoryController::class,'showCatagory'])->name('show_catagories');
    Route::get('add_catagory',[CatagoryController::class,'showAddcatagory'])->name('add_catagory');

    Route::get('add_sub_catagory',[CatagoryController::class,'showAddSubcatagory'])->name('add_sub_catagory');

    Route::get('sub_catagories',[CatagoryController::class,'showSubcatagory'])->name('sub_catagories');

    Route::post('sub_catagory',[CatagoryController::class,'createSubCatagory'])->name('sub_catagory_add');

    Route::post('catagory',[CatagoryController::class,'create'])->name('catagory_add');

    Route::get('/catagory/{catagory}',[CatagoryController::class,'showEditCatagory'])->name('edit_catagory');

    Route::post('/catagory_edit/{catagory}',[CatagoryController::class,'edit'])->name('catagory_edit');

    Route::post('/catagory_delete/{catagory}',[CatagoryController::class,'destroy'])->name('catagory_delete');

    // Route::get('/catagory_edit',[CatagoryController::class,'showEditCatagory'])->name('edit_catagory');

    // Posts

    Route::get('posts',[PostController::class,'showPost']);
    Route::get('post_add',[PostController::class,'showAddPost']);
    Route::post('post',[PostController::class,'create'])->name('add_post');

    Route::get('/post/{post}',[PostController::class,'showEditPost'])->name('edit_post');
    Route::post('/post_edit/{post}',[PostController::class,'edit'])->name('post_edit');

    Route::post('/post_delete/{post}',[PostController::class,'destroy'])->name('post_delete');

    Route::get('settings',[SettingController::class,'index']);
    Route::post('settings',[SettingController::class,'create'])->name('setting_update');


  
   
});


