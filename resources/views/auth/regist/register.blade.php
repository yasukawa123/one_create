<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>ユーザー登録フォーム</title>
  <link rel="stylesheet" href="{{ asset('css/front.css') }}">
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
</head>
<body>
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

  <div class="container">
    <div class="container-center">
      <div class="container-card">
        <h1>REGISTER</h1>
        <form name="registform" acion="/register" method="post" id="registform">
          {{ csrf_field() }}
          <dl>
            <dt>名前:</dt>
            <dd><input type="text" name="name" size="30">
                    <span>{{ $errors->first('name') }}</span></dd>
          </dl>
          <dl>
            <dt>メールアドレス:</dt>
            <dd><input type="text" name="email" size="30">
                    <span>{{ $errors->first('email') }}</span></dd>
          </dl>
          <dl>
            <dt>依頼者orデザイナー:</dt>
            <dd><input type="text" name="role" size="30">
                    <span>{{ $errors->first('role') }}</span></dd>
          </dl>
          <dl>
            <dt>パスワード:</dt>
            <dd><input type="password" name="password" size="30">
                    <span>{{ $errors->first('password') }}</span></dd>
          </dl>
          <dl>
            <dt>パスワード（確認）:</dt>
            <dd><input type="password" name="password_confirmation" size="30">
                    <span>{{ $errors->first('password_confirmation') }}</span></dd>
          </dl>
          <button type='submit' name='action' value='send'>送信</button>
        </form>
      </div>
    </div>
  </div>
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
            <li><p><a href="#">アプリのご案内</a></p></li><li><p><a href="#">はじめての方へ</a></p></li>
            <li><p><a href="#">テキスト</a></p></li>
            <li><p><a href="#">テキスト</a></p></li>
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
