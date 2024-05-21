<?php

namespace App\Models;
use App\Models\Post;

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

    public function posts()
    {
        return $this->belongsTo(Post::class);
    } 
}
