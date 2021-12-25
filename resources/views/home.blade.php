@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('content')
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

@endsection