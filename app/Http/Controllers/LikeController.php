<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Like;
use Auth;

class LikeController extends Controller
{
    public function like(Article $article){
     if(Auth::check()){
         $data = $article->likes;
        
        $like = $data->where('user_id',Auth::user()->id)->first();
         if($like){  
            $try = $like->update([
                "is_liked" => !$like->is_liked
                 ]);
                 return back();
             }
            else{
                $article->likes()->create([
                    "user_id" => Auth::user()->id,
                    "is_liked" => true
                ]);
                return back();
            }
        }
     }
 }
   








































         //    $like = $article->where('id',$article->id)->whereHas('likes',function($query){
    //        $query->where('user_id',Auth()->user()->id);
    //    })->first();
 
     

    
       

       