<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tweet extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'tweets_image',  //実装したい⑤
        'title',
        // 'price',
        'text'
    ];

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

    public function getTweetCount(Int $user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }

    // 一覧画面②
    public function getTimeLines(Int $user_id, Array $follow_ids)
    {
        // 自身とフォローしているユーザIDを結合する
        $follow_ids[] = $user_id;
        return $this->whereIn('user_id', $follow_ids)->orderBy('created_at', 'DESC')->paginate(20);
    }
    
    // 詳細画面②
    public function getTweet(Int $tweet_id)
    {
        return $this->with('user')->where('id', $tweet_id)->first();
    }

    //ここではControllerでバリデーション通った前提でDBに保存する処理②
    public function tweetStore(Int $user_id, Array $data)
    {
        $this->user_id = $user_id;
        $this->text = $data['text'];
        $this->title = $data['title'];
        // $this->price = $data['price']; //追加③
        // $this->tweets_image = $data['tweets_image']; //追加③
        $this->save();

        return;
    }

    // ③ツイート編集機能
    public function getEditTweet(Int $user_id, Int $tweet_id)
    {
        return $this->where('user_id', $user_id)->where('id', $tweet_id)->first();
    }

    // ③ツイート編集機能
    public function tweetUpdate(Int $tweet_id, Array $data)
    {
        $this->id = $tweet_id;
        $this->text = $data['text'];
        $this->title = $data['title']; //追加③
        // $this->price = $data['price']; //追加③
        // $this->tweets_image = $data['tweets_image']; //実装したい⑤
        $this->update();

        return;
    }

    // ③ツイート編集機能：削除
    public function tweetDestroy(Int $user_id, Int $tweet_id)
    {
        return $this->where('user_id', $user_id)->where('id', $tweet_id)->delete();
    }
}