@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-xl-7">
        <h2>マイページ編集</h2>
        <form method="POST" action="{{ route('my_page') }}">
            @csrf
            @method('PATCH')
                <h4>name</h4>
                <textarea name="name" class="form-control" rows="1">{{ $user->name }}</textarea>
                <button type="submit" class="btn btn-success">変更する</button>
        </form>
    </div>
</div>
@endsection