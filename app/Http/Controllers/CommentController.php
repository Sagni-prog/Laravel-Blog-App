<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;
use Auth;

class CommentController extends Controller
{
    public function comment(Request $request, Article $article){
       if(Auth::check()){
        $article_comment = $article->comments;
             $article->comments()->create([
                "user_id" => Auth::user()->id,
                "body" => $request->input('body')
             ]);

             return back();
       }
    }
}
