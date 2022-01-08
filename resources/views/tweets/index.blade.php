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
  
  {{-- ①foreachで回す --}}
  {{-- <div class="project_box">
    <!--カード① START-->
    <div class="project-card">
      <div class="project-inner">
        <img class="projectimage" src="images/table.png" alt="table">
      </div>
        <h3 class="project-title">テーブル作成</h3>
        <div class="price">\2000</div>
        <p>テーブルの作成依頼お願いいたします。</p>
        <div class="user-id">wataru00</div>
      <div class="here">👍 10</div>
    </div>
    <!--カード① END--> 
  </div> --}}

<div class="project_box">
<!--カード① START-->
@if (isset($timelines))
  @foreach ($timelines as $timeline)
    <div class="project-card">
      <a href="{{ url('tweets/' .$timeline->id) }}">
        <div class="project-inner">
          <img class="projectimage" src="{{ asset('storage/tweets_image/3dimage.jpg') }}" width="100%" height="auto">
          {{-- <img class="projectimage" src="{{ asset('storage/tweets_image/' .$timeline->tweets_image) }}" alt="" style="width:50px” height:auto; vertical-align:middle;"> --}}
          {{-- <img src="{{ asset('storage/twees_image/' .$timeline->user->profile_image) }}" class="rounded-circle" width="50" height="50"> --}}
          {{-- <img src="{{ asset('storage/tweets_image/' .$timeline->tweets_image) }}" class="rounded-circle" width="50" height="50"> --}}
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
            <p><img class="comment_image" src="{{ asset('storage/tweets_image/comment_image.png') }}"></p>
            {{-- <p class="comment_count">{{ count($timeline->comments) }}</p> --}}
          </a>
        </div>
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