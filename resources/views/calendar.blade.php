@extends('layouts.default')

@section('title', 'カレンダー')

@section('main')
<div class="container-fluid bg-light p-3">
    <div>
        <div class="text-center">
            <h2>{{ $calendar->getTitle() }}</h2>
        </div>
        <div>
            {!! $calendar->render() !!}
        </div>
    </div>


    <div class="text-center">
        <a href="{{ route('calendar',['year' => $lastYear, 'month' => $lastMonth]) }}" class="btn btn-primary m-2">＜先月</a>
        <a href="{{ route('mypage', ['userId' => Auth::id()]) }}" class="btn btn-secondary m-2">マイページに戻る</a>
        <a href="{{ route('calendar',['year' => $nextYear, 'month' => $nextMonth]) }}" class="btn btn-primary m-2">来月＞</a>
    </div>
</div>

@endsection