<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    use HasFactory;
    protected $guarded =[''];

    /*public static function boot()
    {
        parent::boot();

        self::creating(function($postdetail)
        {
          
            $postdetail->post()->associate($post);
        });
    }*/
}
