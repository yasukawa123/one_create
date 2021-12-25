<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>OneCreate</title>
  <link rel="stylesheet" href="{{ asset('css/front.css') }}">
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
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
        
        <!----- メインコンテンツ START ----->
        <div class="container">
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

          {{-- ①foreachで回す --}}
          <div class="project_box">
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
          </div>
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