{{---------------- 
    自分の投稿を編集するページ
-----------------}}

@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update</div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('tweets.update', $tweets->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-0">
                            <div class="col-md-12 p-3 w-100 d-flex">
                                <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                <div class="ml-2 d-flex flex-column">
                                    <p class="mb-1">{{ $user->screen_name }}</p>
                                </div>
                            </div>
                            <p class="mb-1">タイトル</p>
                                <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} "value="{{ old('title')? : $tweets->title }} "type="text">
                            <p class="mb-1">画像</p>   
                            <input type="file" name="tweets_image" autocomplete="tweets_image">

                                {{-- <input id="tweets_image" type="file" name="tweets_image" class="form-control {{ $errors->has('tweets_image') ? 'is-invalid' : '' }}" value="{{ old('tweets_image') }}"> --}}
                            <p class="mb-1">金額</p>
                                <input id="price" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" value="{{ old('price')? : $tweets->price }}" type="price">
                            <p class="mb-1">依頼内容</p>
                                <textarea class="form-control @error('text') is-invalid @enderror" name="text" required autocomplete="text" rows="4">{{ old('text') ? : $tweets->text }}</textarea>
                            @error('text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="mb-2">1000文字以内</p>
                        <button type="submit" class="btn btn-primary">
                            変更する
                        </button>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection