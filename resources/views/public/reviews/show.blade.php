@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-xl-4 offset-xl-1">
            <div class="sticky-top p-4 bg-light border boder-dark overflow-auto">
                <h5 class="bg-light px-3 border boder-dark my-1 d-inline-block">ジャンル検索</h5>
                <form action="{{ route('bars.index') }}" method="GET">
                    <li>禁煙・喫煙</li>
                    <select class="form-select bg-white" name="smoke_status">
                        @foreach ($bars as $bar)
                            <option value="{{ ($bar->smoke_status) }}">{{ ($bar->smoke_status) }}</option>
                        @endforeach
                    </select>
                    <li>席情報</li>
                    <select class="form-select bg-white" name="seat_status">
                        @foreach ($bars as $bar)
                            <option value="{{ ($bar->seat_status) }}">{{ ($bar->seat_status) }}</option>
                        @endforeach
                    </select>
                    <li>予算</li>
                    <button type="submit" class="btn btn-success">検索</button>
                </form>
            </div>
        </div>
        <div class="col-xl-6">
            <h2>レビュー詳細</h2>
            <div class="card border-warning mb-3" style="max-width: 100%;">
                <div class="card-header">{{ $review->user->name }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->body }}</p>
                </div>
            </div>
            <h2>コメント</h2>
            @foreach ($review_comments as $review_comment)
                <table class="table">
                    <tr>
                        <td>{{ $review_comment->body }}</td>
                        <td>
                            {{ $review_comment->user->name }}<br>
                            {{ $review_comment->created_at }}
                        </td>
                        <td>
                            <form action="{{ route('review_comments.destroy',($review_comment->id)) }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </form>
                        </td>
                    </tr>
                </table>
            @endforeach
            <h2>コメント投稿</h2>
            <form action="{{ route('review_comments.store') }}" method='POST'>
                <input type="hidden" name="review_id" value="{{$review->id}}">
                <input type="hidden" name="bar_id" value="{{$review->bar_id}}">
                @csrf
                <textarea name="body" class="form-control w-50 mb-3" rows="5"></textarea>
                <button type="submit" class="btn btn-success">投稿する</button>
            </form>
        </div>
    </div>
</div>
@endsection