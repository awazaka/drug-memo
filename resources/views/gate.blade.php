@extends('layouts.default')

@section('title', '登録・ログイン')

@section('main')
<div class="container-fluid bg-light p-3">
@include('auth.registerContent')

@include('auth.loginContent')
</div>
@endsection