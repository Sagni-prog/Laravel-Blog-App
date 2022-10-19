<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
   protected $fillable = ['title','user_id','body','catagory_id'];

   public function catagory(){
       return $this->belongsTo(Catagory::class);
   }

   public function comments(){
       return $this->hasMany(Comment::class);
   }

   public function likes(){
       return $this->morphMany(Like::class,'likeable');
   }

   public function user(){
       return $this->belongsTo(User::class);
   }
}
