{{-- @extends('layouts.base') --}}

{{-- stylesheet_design --}}
{{-- @section('design_layout') --}}
  {{-- <link rel="stylesheet" href="{{ asset('css/project.css') }}"> --}}
{{-- @endsection --}}

{{-- @section('content') --}}
{{-- <a href="/tweets" >掲示板へ</a> --}}
{{-- <div><img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" alt='' style="width:50px;height:50px;vertical-align:middle;"> --}}

{{-- @endsection --}}

@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/guest/loginhome.css') }}">
@endsection

@section('home')
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
@endsection