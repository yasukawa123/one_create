

{{-- <p>名前:{{ $my_user->name }}</p>
<p>メールアドレス:{{ $my_user->email }}</p> --}}
<!DOCTYPE html>
<html lang="ja">
<body>
    <p>クライアント編集ページ</p>
    
<!-- マイページ変更画面 -->
<form action="/my_page2" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    <!-- 画像内容 -->
    <div>
        <input type="file" name="top_image">
    </div>
    <input type="submit" value="変更する">
</form>
    <p>タイトル</p><br>
    <p>内容</p><br>
    <p>金額</p><br>
</body>
</html>