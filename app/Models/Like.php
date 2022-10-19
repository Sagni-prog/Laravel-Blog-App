<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ["user_id","is_liked"];

    public function article(){
        return $this->morphTo(Article::class,'likeable');
    }

    public function user(){
        return $this->morphTo(User::class);
    }
}
