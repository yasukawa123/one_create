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


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($all_users as $user)
                    <div class="card">
                        <div class="card-haeder p-3 w-100 d-flex">
                            <img src="{{ $user->profile_image }}" class="rounded-circle" width="50" height="50">
                            <div class="ml-2 d-flex flex-column">
                                <p class="mb-0">{{ $user->name }}</p>
                                {{-- <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a> --}}
                            </div>

                            {{-- ①下記フォローはうまくいかないので一旦保留 --}}
                            @if (auth()->user()->isFollowed($user->id))
                                <div class="px-2">
                                    <span class="px-1 bg-secondary text-light">フォローされています</span>
                                </div>
                            @endif
                            <div class="d-flex justify-content-end flex-grow-1">
                                @if (auth()->user()->isFollowing($user->id))
                                    <form action="{{ route('unfollow', $user->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">フォロー解除</button>
                                    </form>
                                @else
                                    <form action="{{ route('follow', $user->id) }}" method="POST">
                                        {{ csrf_field() }}

                                        <button type="submit" class="btn btn-primary">フォローする</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="my-4 d-flex justify-content-center">
            {{ $all_users->links() }}
        </div>
    </div>


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
