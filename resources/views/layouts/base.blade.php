<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>OneCreate</title>
  <link rel="stylesheet" href="{{ asset('css/front.css') }}">
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
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
                  <a href="/">ONE CREATE</a>
                </h1>
              </div>
              <div class="right">
                <li class="nav-item">
                  <img src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" class="rounded-circle" width="50" height="50">
              </li>
                <a href="/mypage_client">{{ \Auth::user()->name }}さん</p>
                <ul>
                  <!-- 追加 -->
                  <li class="nav-item mr-5">
                    <a href="{{ url('tweets/create') }}" class="btn btn-md btn-primary">ツイートする</a>
                  </li>
                    <li><a href="#">MYPROJECT</a></li>
                    <li><p><a href="/logout">ログアウト</a></li>
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
        
      <!----- メインコンテンツ ----->
      <div class="main-visual">
        <h2>ONE CREATE</h2>
      </div>
      <div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
      </div >
      <div class="container">
        <article>
          <h1>タイトル</h1>
          <section>
            <h2>要素</h2>
            <p>コンテンツの内容</p>
          </section>
        </article>
      </div>
      <!----- メインコンテンツ END ----->
  @endif
  
<!----- フッター ----->
<div class="container-footer-line">
  <div class="container">
    <footer>
      <div class="left">
        <p>●メインメニュー</p>
        <ul>
          <li><p><a href="#">ログアウト</a></p></li>
          <li><p><a href="#">仕事を探す</a></p></li>
          <li><p><a href="#">デザイナーを探す</a></p></li>
          <li><p><a href="#">テキスト1</a></p></li>
          <li><p><a href="#">テキスト2</a></p></li>
        </ul>
      </div>
      <div class="center">
        <p>●サポート</p>
        <ul>
          <li><p><a href="#">はじめての方へ</a></p></li>
          <li><p><a href="#">ご利用ガイド</a></p></li>
          <li><p><a href="#">仕事依頼ガイド</a></p></li>
          <li><p><a href="#">よくある質問</a></p></li>
          <li><p><a href="#">アプリのご案内</a></p></li>
        </ul>
      </div>
      <div class="right">
        <h1 class="logo">
          <a href="/">ONE CREATE</a>
        </h1>
      </div>
    </footer>
    <div class="copyright">
      <p>&copy; 2021 One Create.</p>
    </div>
  </div>
</div>
<!----- フッター END ----->
</body>
</html>