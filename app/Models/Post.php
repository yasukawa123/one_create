<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// tweet

class Post extends Model
{
    /**
     * 
     */
    protected $fillable = [
      'text'
    ];

    //　リレーション親子関係
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getUserTimeLine(Int $user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->paginate(50);
    }

    public function getPostCount(Int $user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }

    // public function category(){
    //   // 投稿は1つのカテゴリーに属する
    //   return $this->belongsTo(\App\Category::class,'category_id');
    // }

    // public function user(){
    //   return $this->belongsTo(\App\User::class,'user_id');
    // }

    // public function comments(){
    //   return $this->hasMany(\App\Comment::class,'post_id', 'id');
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany('App\Tag')->withTimestamps();
    // }
}