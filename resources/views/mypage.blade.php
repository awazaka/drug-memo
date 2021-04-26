<?php
$date = date('Y-m-d');
$year = date('Y');
$month = date('n');
?>

@extends('layouts.default')

@section('title', 'マイページ')

@section('main')
<div class="container-fluid bg-light p-3">
<div>
    <h2>{{ $user->name }}さんのマイページ</h2>
</div>

@foreach($drugs as $drug)
@include('drugs.DragTable')
@endforeach


    <!-- ボタン：追加 -->
    <div class="d-grid mb-3">
        <a href="{{ route('createDrug.get') }}" class="btn btn-primary">＋新規追加</a>
    </div>
    <div class="d-grid mb-3">
        <a href="{{ route('calendar',['year' => $year, 'month' => $month]) }}" class="btn btn-success">カレンダー</a>
    </div>

    <div class="text-end">
        <a href="{{ route('destroyUserPage')}}" class="btn btn-dark text-warning">退会する</a>
    </div>
</div>

@endsection