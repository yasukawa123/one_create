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
          {{-- <div class="card-header">Board</div> --}}

{{-- @isset($search_result)
    <h5 class="card-title">{{ $search_result }}</h5>
@endisset

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif --}}

    {{-- @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h5 class="card-title">
                カテゴリー:
                 <a href="{{ route('posts.index', ['category_id' => $post->category_id]) }}">
                    {{ $post->category->category_name }}
                </a>
            </h5>

            <h5 class="card-title">
                Tag:
                @foreach($post->tags as $tag)
                    <a href="{{ route('posts.index', ['tag_name' => $tag->tag_name]) }}">
                        #{{ $tag->tag_name }}
                    </a>
                @endforeach
            </h5>
            <h5 class="card-title">
                投稿者:
                <a href="{{ route('users.show', $post->user_id) }}">{{ $post->user->name }}</a>
            </h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
          </div>
        </div>
    @endforeach --}}

          {{-- ①foreachで回す
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
          </div> --}}

          

          {{-- <div class="table-responsive">
            <table class="table table-hover"> --}}
                {{-- <thead>
                <tr>
                    <th>ID</th>
                    <th>カテゴリ</th>
                    <th>作成日時</th>
                    <th>名前</th>
                    <th>件名</th>
                    <th>メッセージ</th>
                    <th>処理</th>
                </tr>
                </thead>
                <tbody id="tbl"> --}}
                {{-- @foreach ($posts as $post) --}}
                    {{-- <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->created_at->format('Y.m.d') }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->subject }}</td>
                        <td>{!! nl2br(e(Str::limit($post->message, 100))) !!}
                        @if ($post->comments->count() >= 1)
                            <p><span class="badge badge-primary">コメント：{{ $post->comments->count() }}件</span></p>
                        @endif
                        </td>
                        <td class="text-nowrap">
                            <p><a href="" class="btn btn-primary btn-sm">詳細</a></p>
                            <p><a href="" class="btn btn-info btn-sm">編集</a></p>
                            <p><a href="" class="btn btn-danger btn-sm">削除</a></p>
                        </td>
                    </tr> --}}
                {{-- @endforeach --}}
                {{-- </tbody>
            </table>
        </div> --}}
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
      <!----- アニメーション START----->
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
      <!----- アニメーション END----->
      <div class="container">
        <article>
          <h1>Hello</h1>
          <section>
            <h2>クラウドソーシングサイトです</h2>
            <p>デザイン専門のクラウドソーシングサイト</p>
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
            <p>&copy; 2021 ONE CREATE.</p>
          </div>
        </div>
      </div>
      <!----- フッター END ----->
</body>
</html>