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
                    <div class="col-xl-6">
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
                    <div class="col-xl-2 py-2">
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
        </div>
    </div>
</div>
@endsection