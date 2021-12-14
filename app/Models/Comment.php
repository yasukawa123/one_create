<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * 
     */
    protected $fillable = [
        'text'
    ];

    // リレーション親子関係
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //  public function user(){
    //   return $this->belongsTo(\App\User::class,'user_id');
    // }
}
