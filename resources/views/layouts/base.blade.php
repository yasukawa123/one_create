<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>OneCreate</title>
  <link rel="stylesheet" href="{{ asset('css/front.css') }}">
  @yield('common_layouts')
  @yield('design_layout')
</head>

<body>
  @if (Auth::check())
    <!----- Header START ----->
    <div class="container-header-line">
      <div class="container">
        <header>
          <div class="left">
            <h1 class="logo">
              <a href="/tweets">ONE CREATE</a>
            </h1>
          </div>
          <div class="right">
            <ul class="header-dropmenu">
              <li>
                <img class="header-profile-image" src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" alt="" >
                <span style="vertical-align:middle;display:inline-block;"><a href="{{ url('users/' .auth()->user()->id) }}">{{ \Auth::user()->screen_name }}</a></span>
                <ul>
                  <!-- 追加 -->
                  <li><a href="{{ url('tweets/create') }}" class="btn btn-md btn-primary">ツイートする</a></li>
                  <li><a href="{{ url('users/' .auth()->user()->id) }}">マイページ</a></li>
                  <li><p><a href="/logout">ログアウト</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </header>
      </div>
    </div>
    <!----- Header END -----> 
    <!----- メインコンテンツ START ----->
    <div class="container">
      @yield('content')
    </div>
    <!----- メインコンテンツ END ----->

  @else
    <!----- Top Header START ----->
    <div class="container-header-line"> 
      <div class="container">
        <header>
          <div class="left">
            <h1 class="logo">
              <a href="/tweets">ONE CREATE</a>
            </h1>
          </div>
          <div class="right">
            <p><a href="/login">ログイン</a>
            <a href="/register">会員登録</a></p>
          </div>
        </header>
      </div>
    </div>
    <!----- Top Header END ----->
    @yield('home')
    @yield('login')
    @yield('register')
  @endif
  
@extends('layouts/footer')