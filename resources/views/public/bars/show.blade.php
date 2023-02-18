@extends('layouts.app')

@section('content')
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-xl-5">

        </div>
        <div class="col-xl-7">
            <h2 class="pb-2">居酒屋詳細</h2>
            <div class="card mb-3 shadow" style="max-width: 80%;">
                <div class="row g-0">
                    <div class="col-xl-5">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-xl-3 py-2 text-nowrap">
                        <p>店舗名:</p>
                        <p>予算:</p>
                        <p>住所:</p>
                        <p>電話番号:</p>
                        <p>ジャンル:</p>
                        <p>空席情報:</p>
                        <p>営業時間:</p>
                        <p>定休日:</p>
                        <p>禁煙・喫煙:</p>
                        <p>チャージ料:</p>
                    </div>
                    <div class="col-xl-4 py-2 text-nowrap">
                        <p>{{ $bar->name }}</p>
                        <p>{{ $bar->budget_min }}～{{ $bar->budget_max }}</p>
                        <p>{{ $bar->address }}</p>
                        <p>{{ $bar->telephone_number }}</p>
                        <p>{{ $bar->name }}</p>
                        <p>{{ $bar->seat_status }}</p>
                        <p>{{ $bar->business_hours }}</p>
                        <p>{{ $bar->regular_holiday }}</p>
                        <p>{{ $bar->smoke_status }}</p>
                        <p>{{ $bar->service_charge }}</p>
                    </div>
                </div>
            </div>
            <h2>レビュー一覧</h2>
            @foreach ($reviews as $review)
            <a href="{{route('reviews.show',($review->id))}}">
                <div class="card border-warning mb-3" style="max-width: 80%;">
                    <div class="card-header">{{ $review->user->name }}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->title }}</h5>
                        <p class="card-text">{{ $review->body }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            <h2>レビュー投稿</h2>
            <form action="{{ route('reviews.store') }}" method='POST'>
                @csrf
                <input type="hidden" name="bar_id" value="{{$bar->id}}">
                <textarea name="title" class="form-control w-50 mb-3" rows="1"></textarea>
                <textarea name="body" class="form-control w-50" rows="5"></textarea>
                <button type="submit" class="btn btn-success">投稿する</button>
            </form>
        </div>
    </div>
</div>
@endsection