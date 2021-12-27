@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/guest/loginhome.css') }}">
@endsection

@section('top_page')
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