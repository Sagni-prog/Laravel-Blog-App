<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Article;


class CatagoryController extends Controller
{
    public function index($catagory_name){
        $catagory = Catagory::where('catagory_name',$catagory_name)->with('articles')->get();
        $article_catagory = Catagory::all();
        return view('articleByCatagory',['catagory' => $catagory,'article_catagory' => $article_catagory]);
    }
    public function allCatagory(){
            $article = Article::with('catagory')->get();
            $catagory = Catagory::all();
        return view('allCatagory',['articles' => $article,'catagory' => $catagory]);
    }
}
