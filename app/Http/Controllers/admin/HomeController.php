<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcatagory;
use App\Models\Catagory;
use App\Models\Setting;
use App\Models\Post;

class HomeController extends Controller
{
    public function getHome(){
        
        $setting = Setting::all()->first();
        $posts = Post::with('photos')->orderBy('id','desc')->get();

        $catagories = Catagory::with('subCatagories')
                            ->where('show_on_menu','show')
                            ->whereHas('subCatagories',function($query){
                               $query->where('show_on_menu','show');
                    })->get();
         $sub_catagory = Subcatagory::with('post','catagory')->get();
         $catagory_data = Catagory::with('subCatagory')->orderBy('catagory_order','asc')->get();
      
       
   
          return view('home.home',compact('setting','posts','catagories','sub_catagory','catagory_data'));
  }

  public function singlePost(Post $post){
       
        $setting = Setting::all()->first();
            $catagories = Catagory::with('subCatagories')
            ->where('show_on_menu','show')
            ->whereHas('subCatagories',function($query){
              $query->where('show_on_menu','show');
        })->get();

        $sub_catagory = Subcatagory::with('post','catagory')->get();

          $old_value = $post->visitors;
          $new_value = $old_value + 1;
          $post->update([
              'visitors' => $new_value
        ]);


        $related_posts_catagory = Catagory::with('subCatagories')
                                    ->where('catagory_name',$post->subCatagory->catagory->catagory_name)->get();

      
         return view('home.single_post',compact('post','catagories','sub_catagory','setting','related_posts_catagory'));
  }
}
