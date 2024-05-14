<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;
use App\Models\PostDetail;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded =[''];

    public static function boot()
    {
        parent::boot();
        self::creating(function($post)
        {
            $post->user()->associate(auth()->user()->id);
            $post->category()->associate(request()->categorie);
        });
        self::updating(function($post)
        {
            $post->category()->associate(request()->categorie);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }
   
}
