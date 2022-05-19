@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/guest/login.css') }}">
@endsection

@section('login')
<div class='container'>
  @isset($errors) {{--調べる--}}
    <p style="color:red">{{ $errors->first('message') }}</p>
  @endisset
  <form name="loginform" action="/login" method="post">
    {{ csrf_field() }}
    <dl>
      <dt>メールアドレス:</dt><dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
      <dt>パスワード:</dt><dd><input type="password" name="password" size="30"></dd>
    </dl>
    <button type='submit' name='action' value='send'>ログイン</button>
  </form>
</div>

@endsection