<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
                    'user_id',
                    'photo_name',
                    'photo_path',
                    'photo_url',
                    'photo_extension',
                    'photo_width',
                    'photo_height'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
