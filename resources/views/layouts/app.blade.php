<!DOCTYPE html>
<html lang="ja">

<head>
  @yield('head')
</head>

<body>
  
  @if (Auth::check())
        <!----- LoginHeader START ----->
        @yield('loginheader')
        <!----- LoginHeader END -----> 
        
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
      <!----- LogoutHeader START ----->
      @yield('logoutheader')
      <!----- LogoutHeader END ----->
        
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
          <section>
            <h2>クラウドソーシングサイト</h2>
            <p>こちらのさいとはクラウドソーシングさいとです。テストテキスト</p>
          </section>
        </article>
      </div>
      <!----- メインコンテンツ END ----->
  @endif


      <!----- フッター ----->
      @yield('footer')
      <!----- フッター END ----->
</body>
</html>