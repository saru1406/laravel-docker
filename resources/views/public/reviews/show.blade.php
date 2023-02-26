@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-xl-5">

        </div>
        <div class="col-xl-7">
            <h2>レビュー詳細</h2>
            <div class="card border-warning mb-3" style="max-width: 80%;">
                <div class="card-header">{{ $review->user->name }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->body }}</p>
                </div>
            </div>
            <h2>コメント一覧</h2>
            @foreach ($review_comments as $review_comment)
                <div class="card border-warning mb-3" style="max-width: 80%;">
                <div class="card-header">{{ $review_comment->user->name }}</div>
                    <div class="card-body">
                        <p class="card-text">{{ $review_comment->body }}</p>
                    </div>
                </div>
            @endforeach
            <h2>コメント投稿</h2>
            <form action="{{ route('review_comments.store') }}" method='POST'>
                <input type="hidden" name="review_id" value="{{$review->id}}">
                <input type="hidden" name="bar_id" value="{{$review->bar_id}}">
                @csrf
                <textarea name="body" class="form-control w-50 mb-3" rows="5"></textarea>
                <button type="submit" class="btn btn-success">投稿する</button>
        </div>
    </div>
</div>
@endsection