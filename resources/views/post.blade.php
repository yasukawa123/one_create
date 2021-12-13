<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>OneCreate</title>
  <link rel="stylesheet" href="{{ asset('css/front.css') }}">
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
</head>

<body>
  
  <div class="table-responsive">
    <table class="table table-hover">
        <thead>
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
        <tbody id="tbl">
        @foreach ($posts as $post)
            <tr>
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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
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