{{---------------- 
    投稿ページ
-----------------}}

@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('content')
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tweets.store') }}"> --}}
                        {{-- @csrf --}}

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-12 p-3 w-100 d-flex"> --}}
                                {{-- <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50"> --}}
                                {{-- <div class="ml-2 d-flex flex-column">
                                    <p class="mb-0">{{ $user->name }}</p>
                                </div>
                            </div> --}}
                            {{-- <input type="number" name="price" step="500"class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="price" rows="4"> --}}
                            {{-- {{ old('price') }} --}}
                                {{-- <textarea class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="price" rows="4">{{ old('price') }}</textarea>  --}}
                                {{-- <textarea class="form-control @error('text') is-invalid @enderror" name="text" required autocomplete="text" rows="4">{{ old('text') }}</textarea> --}}
                                {{-- <form action="/my_page2" method="post" enctype='multipart/form-data'>  --}}
                                    {{-- {{ csrf_field() }} --}}
                                    <!-- 画像内容 -->
                                    {{-- <div> --}}
                                        {{-- <input type="file" name="top_image"> --}}
                                    {{-- </div> --}}
                                    {{-- <input type="submit" value="変更する"> --}}
                                {{-- </form> --}}

                                {{-- @error('text') --}}
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                {{-- @enderror --}}
                            {{-- </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-right">
                                <p class="mb-4 text-danger">140文字以内</p>
                                <button type="submit" class="btn btn-primary">
                                    ツイートする
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('tweets.store') }}">
                            @csrf
    
                            <div class="form-group row mb-0">
                                <div class="col-md-12 p-3 w-100 d-flex">
                                    <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                    <div class="ml-2 d-flex flex-column">
                                        <p class="mb-0">{{ $user->name }}</p>
                                        <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
                                    </div>
                                </div>
                                {{-- <p>画像投稿</p>⑤ --}}

                                {{-- タイトル記入欄 --}}
                                <p>タイトル</p>
                                <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" type="title">                                
                                {{-- 金額記入欄 --}}
                                <p>金額</p>
                                <input id="price" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" value="{{ old('price') }}" type="price">
                                {{-- <p>画像を添付</p> --}}
                                {{-- <form action="/my_page2" method="post" enctype='multipart/form-data'> sda</form> --}}
                                {{-- <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="mr-2 rounded-circle" width="80" height="80" alt="profile_image"> --}}
                                {{-- <input id="twets_image" type="file" name="tweets_image" class="@error('tweets_image') is-invalid @enderror" autocomplete="tweets_image"> --}}
                                {{-- <input id="tweets_image" type="file" name="tweets_image" class="form-control {{ $errors->has('tweets_image') ? 'is-invalid' : '' }}" value="{{ old('tweets_image') }}"> --}}

                                {{-- 依頼内容記入欄 --}}
                                <div class="col-md-12">
                                    <p>依頼内容</p>
                                    <textarea class="form-control @error('text') is-invalid @enderror" name="text" required autocomplete="text" rows="4">{{ old('text') }}</textarea>
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-right">
                                    <p class="mb-4 text-danger">500文字以内</p>
                                    <button type="submit" class="btn btn-primary">
                                        ツイートする
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection