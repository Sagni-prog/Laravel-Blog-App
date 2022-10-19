<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Storage;
use File;

class PhotoController extends Controller
{

    public function index(){
      $image = Image::all();
      return view('photo',compact('image'));
    }

    public function show(Image $image){
         return view('single_photo',compact('image'));
    }

    public function store(Request $request){

        if($request->hasFile('photo')){
            
            //creating image name
            $image_name = $request->name;
            $ext = $request->file('photo')->extension();
            
            $path = Storage::putFileAs('photo',$request->image,$image_name.'.'.$ext);

            
             //creating the image url
             $image_url = Storage::url($path);
         
             $data = $this->getDimension($path);
             $width = $data['width'];
             $height = $data['height'];

            

             Image::create([
                "photo_name" => $image_name,
                "photo_path" => $path,
                "photo_url" => $image_url,
                "photo_width" => $width,
                "photo_height" => $height
            ]);
        }   
    }

    public function destroy(Request $request, Image $image){
          Storage::delete($image->photo_path);
           $image->delete();
            return back();
      }

    public static function getDimension($path){
        [$width,$height] = getimagesize(Storage::path($path));

        $data = [
            "width" => $width,
            "height" => $height
        ];
         return $data; 
    }

   
  }

