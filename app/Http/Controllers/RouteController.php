<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Article;
use App\Models\Catagory;

class RouteController extends Controller
{
      public function route(){
          if(Auth::check()){
              if(Auth::user()->user_type === 1){
                return redirect('/dashboard');
              }
              else{
                  return redirect('/');
              }
          }
      } 
      
      public function showAddArticle(){
          if(Auth::check()){
              $catagory = Catagory::all();
              return view('add_article',['catagory' => $catagory]);
          }
      }

      public function showDashboard(){
        if(Auth::check()){
            if(Auth::user()->user_type === 1){
                $article = Article::with('catagory')->get();
                return view('dashboard',['article' => $article]);
            }
        }
      }

      public function showPasswordReset(){
          if(Auth::check()){
              if(Auth()->user()->user_type === 1){
                  return view('change_password');
              }
          }

      }

      public function showSingleBlog(Article $article){
              return view('singleBlog',["article" => $article]);
      }
  }
