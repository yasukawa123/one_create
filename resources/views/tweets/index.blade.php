{{---------------- 
    掲示板トップ
    ・home　ログインしたらここを表示 
-----------------}}

@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('content')
{{-- 時間ができたらやっていく⑤ --}}
{{-- <div class="create_category">
  <ul>
    <li><a href="#">Product</a></li>
    <li><a href="#">Illustrator</a></li>
    <li><a href="#">Graphic</a></li>
    <li><form method="get" action="#" class="search_container">
      <input type="text" size="20" placeholder="ID検索">
      <input type="submit" value="&#xf002">
      </form>
    </li>
    <li><form method="get" action="#" class="search_container">
      <input type="text" size="20" placeholder="金額検索">
      <input type="submit" value="&#xf002">
      </form>
    </li>
    <li><form method="get" action="#" class="search_container">
      <input type="text" size="20" placeholder="キーワード検索">
      <input type="submit" value="&#xf002">
      </form>
    </li>
  </ul>
</div> --}}

<div class="project-top">
  <a href="{{ url('users') }}">＜ ユーザ一覧へ  ＞<i class="fas fa-users" class="fa-fw"></i> </a>
</div>
  
<div class="project_box">
<!--カード① START-->
@if (isset($timelines))
  @foreach ($timelines as $timeline)
    <div class="project-card">
      <a href="{{ url('tweets/' .$timeline->id) }}">
        <div class="project-inner">
          @if (isset( $timeline->tweets->tweets_image ))
            <img class="projectimage" src="{{ asset('storage/default_image/noimage.png') }}" alt="tweets_image">
          @else
            <img class="projectimage" src="{{ asset('storage/tweets_image/' .$timeline->tweets_image) }}" alt="tweets_image">
          @endif
        </div>
      </a>

      {{---------------
        カテゴリー
      ---------------}}
      <p class='mb-6-tag'>3Dモデル</p>
      <div class="text">
        {{---------------
          タイトル
        ---------------}}
        <p class="mb-2-return">{{ $timeline->title }}</p>

        {{---------------
          依頼内容
        ---------------}}
        <p class="mb-6-return">{!! nl2br(e($timeline->text)) !!}</p>
      </div>
      <div class="contributor">
        <div class="left">
          {{---------------
            プロフィール画像
          ---------------}}
          @if (!isset( $timeline->user->profile_image ))
            <img  class="profile_image" src="{{ asset('storage/profile_image/000.png') }}" alt="profile_image">
          @else
            <img  class="profile_image" src="{{ asset('storage/profile_image/' .$timeline->user->profile_image) }}" alt="profile_image">
          @endif
        </div>
        <div class="right">
          {{---------------
            ユーザーネーム
          ---------------}}
          <p class="mb-6">{{ $timeline->user->screen_name }}</p>

          {{---------------
            公開日
          ---------------}}
          <p class="mb-6">{{ $timeline->created_at->format('y/m/d') }}</p>
        </div>
        <div class="comment">
          {{---------------
            コメント
          ---------------}}
          <a href="{{ url('tweets/' .$timeline->id) }}">
            <p><img class="comment_image" src="{{ asset('storage/default_image/comment_image.png') }}"></p>
            <p class="comment_count">{{ count($timeline->comments) }}</p>
          </a>
        </div>
        {{---------------
            お気に入り
          ---------------}}
        <!-- ここから -->
        <div class="d-flex align-items-center">
          @if (!in_array($user->id, array_column($timeline->favorites->toArray(), 'user_id'), TRUE))
              <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                  @csrf

                  <input type="hidden" name="tweet_id" value="{{ $timeline->id }}">
                  <button type="submit" class="btn p-0"><img class="comment_image" src="{{ asset('storage/default_image/favorites.png') }}"><i class="far fa-heart fa-fw"></i></button>
              </form>
          @else
              <form method="POST" action="{{ url('favorites/' .array_column($timeline->favorites->toArray(), 'id', 'user_id')[$user->id]) }}" class="mb-0">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn p-0 "><img class="comment_image" src="{{ asset('storage/default_image/favorites.png') }}"><i class="fas fa-heart fa-fw"></i></button>
              </form>
          @endif
          <p class="mb-0 text-secondary">{{ count($timeline->favorites) }}</p>
      </div>
      <!-- ここまで -->
        {{---------------
          ★★お気に入り　未実装でもいいかも
        ---------------}}
        {{-- <button type="" class="btn p-0 border-0 text-primary">👍<i class="far fa-heart fa-fw"></i></button>
        <p class="">{{ count($timeline->favorites) }}</p> --}}
        {{---------------
          報酬金額 
        ---------------}}
        <div class="price">
          <p class="mb-6">{!! number_format(nl2br(e($timeline->price))) !!}円</p> 
        </div>
      </div>
    </div>
  @endforeach
@endif
<!--カード① END--> 
</div>

<div class="mb-1-pagenate">
    {{ $timelines->links('vendor.pagination.semantic-ui') }}
</div>
@endsection