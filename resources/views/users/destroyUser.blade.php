@extends('layouts.default')

@section('title', '退会ページ')

@section('main')
<div class="container-fluid bg-light text-center p-3">
    <p>本当に退会しますか？</p>
        <form method="post" action="{{ route('destroyUser', ['id' => Auth::id() ]) }}">
            {{ csrf_field() }}
            @method('delete')
            <input type="submit" value="退会する" class="btn btn-danger">
        </form>
</div>
@endsection