@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

{{-- <p>名前:{{ $my_user->name }}</p>
<p>メールアドレス:{{ $my_user->email }}</p> --}}
<!DOCTYPE html>
<html lang="ja">
<body>
    <p>デザイナ編集ーページ</p>
<!-- マイページ変更画面 -->
<form action="/my_page2" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    <!-- 画像内容 -->
    <div>
        <input type="file" name="top_image">
    </div>
    <input type="submit" value="変更する">
</form>
    <p>画像1</p><br>
    <p>画像2</p><br>
    <p>画像3</p><br>
    <p>画像4</p><br>
    <p>画像5</p><br>
    <p>画像6</p><br>
    <p>テキスト1</p><br>
    <p>テキスト2</p><br>
    <p>テキスト3</p><br>
    <p>テキスト4</p><br>
    <p>テキスト5</p><br>
    <p>テキスト6</p><br>
</body>
</html>