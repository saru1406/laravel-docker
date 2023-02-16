@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-xl-8">
        <h2 class="py-3">マイページ</h2>
        <h2>登録情報</h2>
        <table class="table table-bordered">
            <tr>
                <th class="bg-light">氏名</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th class="bg-light">メールアドレス</th>
                <td>{{ $user->email }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
