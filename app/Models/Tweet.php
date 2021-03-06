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
        'title',
        'price',
        'text',
        'tweets_image'  //実装したい⑤
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
        return $this->whereIn('user_id', $follow_ids)->orderBy('created_at', 'DESC')->paginate(18);
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
        $this->price = $data['price'];
        $this->tweets_image = $data['tweets_image'];
        $this->save();

        if (isset($data['tweets_image'])){
            $file_name = $data['tweets_image']->store('public/tweets_image/');

            $this::where('id', $this->id)
                ->update([
                    'tweets_image' => basename($file_name),
                ]); 
        }

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
        $this->title = $data['title'];
        $this->price = $data['price'];
        $this->tweets_image = $data['tweets_image'] ->store('public/tweets_image/');
        $this->update();

        // if (isset($data['tweets_image'])){
        //     $file_name = $data['tweets_image']->store('public/tweets_image/' .$name);

        //     $this::where('tweet_id', $this->id)
        //         ->update([
        //             'title' => $data['title'],
        //             'tweets_image' => basename($file_name),
        //             'price' => $data['price'],
        //             'text' => $data['text'],                    
        //         ]);
        // } else {
        //     $this::where('tweet_id', $this->id)
        //         ->update([
        //             'title' => $data['title'],
        //             'price' => $data['price'],
        //             'text' => $data['text'],                    
        //         ]);
        // }

        return;
    }

    // ③ツイート編集機能：削除
    public function tweetDestroy(Int $user_id, Int $tweet_id)
    {
        return $this->where('user_id', $user_id)->where('id', $tweet_id)->delete();
    }
    
}