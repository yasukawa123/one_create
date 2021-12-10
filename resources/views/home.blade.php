<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>OneCreate</title>
  <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
</head>

<body>
  
  @if (Auth::check())
        {{-- {{ \Auth::user()->name }}さん</p> --}}
        <div class="container">
          <!----- Header START ----->
          <header>
            <div class="left">
              <h1 class="logo">
                <a href="/">ONE CREATE</a>
              </h1>
            </div>
            <div class="right">
              <a href="#">{{ \Auth::user()->name }}さん</p>
              <ul>
                  <li><a href="#">MYPROJECT</a></li>
                  <li><p><a href="/logout">ログアウト</a></li>
              </ul>
            </div>
          </header>
        <!----- Header END ----->
        
        <!----- メインコンテンツ ----->
        <div class="main-visual">
          <h2>ONE CREATE</h2>
          <p class="toptitle">プロが集まるサイト</p>
        </div>
    
    
        <article>
        <h1>タイトル</h1>
        <section>
        <h2>タイトル</h2>
        <p>コンテンツの内容</p>
        </section>
        </article>
        <!----- メインコンテンツ END ----->
        
        <!----- フッター ----->
        <footer>フッター</footer>
        <!----- フッター END ----->
        </div>
        <!-- Container END-->
  @else
        <p>ゲストさん</p>
        <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
  @endif
</body>
</html>