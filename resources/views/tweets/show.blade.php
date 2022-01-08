{{---------------- 
    1つの投稿 
-----------------}}

@extends('layouts.base')

{{-- stylesheet_design --}}
@section('design_layout')
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('content')
  <div class="row justify-content-center mb-5">
      <div class="col-md-8 mb-3">
          <div class="card">
              <div class="card-haeder p-3 w-100 d-flex">
                  <img src="{{ asset('storage/profile_image/' .$tweet->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                  <div class="ml-2 d-flex flex-column">
                      {{-- 本名はいらないよね？ --}}
                      {{-- <p class="mb-0">{{ $tweet->user->name }}</p> --}}
                      <p class="mb-0">{{ $tweet->user->screen_name }}</p>
                  </div>
                  <div class="d-flex justify-content-end flex-grow-1">
                      <p class="mb-0 text-secondary">{{ $tweet->created_at->format('Y-m-d H:i') }}</p>
                  </div>
              </div>
              <div class="card-body">
                  {!! nl2br(e($tweet->text)) !!}
              </div>
              <div class="card-footer py-1 d-flex justify-content-end bg-white">
                  @if ($tweet->user->id === Auth::user()->id)
                      <div class="dropdown mr-3 d-flex align-items-center">
                          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v fa-fw"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <form method="POST" action="{{ url('tweets/' .$tweet->id) }}" class="mb-0">
                                  @csrf
                                  @method('DELETE')

                                  <a href="{{ url('tweets/' .$tweet->id .'/edit') }}" class="dropdown-item">編集</a>
                                  <button type="submit" class="dropdown-item del-btn">削除</button>
                              </form>
                          </div>
                      </div>
                  @endif
                  <div class="mr-3 d-flex align-items-center">
                      <a href="{{ url('tweets/' .$tweet->id) }}"><i class="far fa-comment fa-fw"></i></a>
                      <p class="mb-0 text-secondary">{{ count($tweet->comments) }}</p>
                  </div>
                  {{-- お気に入り：いらないと思う --}}
                  {{-- <div class="d-flex align-items-center">
                      <button type="" class="btn p-0 border-0 text-primary"><i class="far fa-heart fa-fw"></i></button>
                      <p class="mb-0 text-secondary">{{ count($tweet->favorites) }}</p>
                  </div> --}}
              </div>
          </div>
      </div>
  </div>

  <!-- ここから下を変更してください -->
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            <ul class="list-group">
                @forelse ($comments as $comment)
                    <li class="list-group-item">
                        <div class="py-3 w-100 d-flex">
                            <img src="{{ asset('storage/profile_image/' .$comment->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                            <div class="ml-2 d-flex flex-column">
                                {{-- ScreenName --}}
                                <a href="{{ url('users/' .$comment->user->id) }}" class="text-secondary">{{ $comment->user->screen_name }}</a>
                            </div>
                            <div class="d-flex justify-content-end flex-grow-1">
                                <p class="mb-0 text-secondary">{{ $comment->created_at->format('Y-m-d H:i') }}</p>
                            </div>
                        </div>
                        <div class="py-3">
                            {!! nl2br(e($comment->text)) !!}
                        </div>
                    </li>
                @empty
                    <li class="list-group-item">
                        <p class="mb-0 text-secondary">コメントはまだありません。</p>
                    </li>
                @endforelse
                <li class="list-group-item">
                    <div class="py-3">
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf

                            <div class="form-group row mb-0">
                                <div class="col-md-12 p-3 w-100 d-flex">
                                    <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                    <div class="ml-2 d-flex flex-column">
                                        <p class="mb-0">{{ $user->name }}</p>
                                        <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="tweet_id" value="{{ $tweet->id }}">
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
                                    <p class="mb-4 text-danger">140文字以内</p>
                                    <button type="submit" class="btn btn-primary">
                                        ツイートする
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection