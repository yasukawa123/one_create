@extends('layouts.app')

@section('loginheader') 
  <!----- Header START ----->
  <div class="container-header-line">
    <div class="container">
      <header>
        <div class="left">
          <h1 class="logo">
            <a href="/">ONE CREATE</a>
          </h1>
        </div>
        <div class="right">
          <a href="/mypage_client">{{ \Auth::user()->name }}さん</p>
          <ul>
              <li><a href="#">MYPROJECT</a></li>
              <li><p><a href="/logout">ログアウト</a></li>
          </ul>
        </div>
      </header>
    </div>
  </div>
  <!----- Header END -----> 
@endsection

@section('logoutheader')                      
      <!----- Header START ----->
      <div class="container-header-line"> 
        <div class="container">
          <header>
            <div class="left">
              <h1 class="logo">
                <a href="/">ONE CREATE</a>
              </h1>
            </div>
            <div class="right">
              <p><a href="/login">ログイン</a>
              <a href="/register">会員登録</a></p>
            </div>
          </header>
        </div>
      </div>
      <!----- Header END ----->
@endsection