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
<div class="create_category">
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
</div>

<div class="col-md-8 mb-3 text-right">
  <a href="{{ url('users') }}">ユーザ一覧 <i class="fas fa-users" class="fa-fw"></i> </a>
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
      <div class="project-inner">
        {{-- <img src="{{ asset('storage/twees_image/' .$timeline->user->profile_image) }}" class="rounded-circle" width="50" height="50"> --}}
        <img class="projectimage" src="{{ asset('storage/tweets_image/noimage.png') }}" width="100%" height="auto">
      </div>
      <p class="mb-0">{{ $timeline->user->name }}</p>
      <a href="{{ url('users/' .$timeline->user->id) }}" class="text-secondary">{{ $timeline->user->screen_name }}</a>
      <p class="mb-0 text-secondary">{{ $timeline->created_at->format('Y-m-d H:i') }}</p>     
        {!! nl2br(e($timeline->text)) !!}
        <p>\{!! nl2br(e($timeline->price)) !!}yen</p> 
        @if ($timeline->user->id === Auth::user()->id)
          <div class="dropdown mr-3 d-flex align-items-center">
              <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-fw"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <form method="POST" action="{{ url('tweets/' .$timeline->id) }}" class="mb-0">
                      @csrf
                      @method('DELETE')
                      <a href="{{ url('tweets/' .$timeline->id .'/edit') }}" class="dropdown-item">編集</a>
                      <button type="submit" class="dropdown-item del-btn">削除</button>
                  </form>
              </div>
          </div>
        @endif
        <div class="mr-3 d-flex align-items-center">
            <a href="{{ url('tweets/' .$timeline->id) }}">💬<i class="far fa-comment fa-fw"></i></a>
            <p class="mb-0 text-secondary">{{ count($timeline->comments) }}</p>
        </div>
        <div class="d-flex align-items-center">
            <button type="" class="btn p-0 border-0 text-primary">👍<i class="far fa-heart fa-fw"></i></button>
            <p class="mb-0 text-secondary">{{ count($timeline->favorites) }}</p>
        </div>
    </div>        
  @endforeach
@endif
<!--カード① END--> 
</div>

<div class="my-4 d-flex justify-content-center">
    {{ $timelines->links() }}
</div>
@endsection