<?php
if(isset($request))
{
    $count = $request;
}
else
{
    $count=0;
}
?>

@extends('layouts.default')

@section('title', 'title')

@section('main')
<div class="container-fluid bg-light p-3">

    
    <form id="addForm" method="post" action="{{ route('createDrug.post') }}">
        {{ csrf_field() }}
        
    </form>

@include('commons.formStart',[
    'title' => '新規追加',
    'method' => 'post',
    'action' => route('storeDrug')
])
<p class="text-end mb-0">1日で摂取する回数を選択してください。</p>
<div class="row mb-3">
    <div class="col-3 text-end">
        <label for="count" class="col-form-label">摂取回数</label>
    </div>
    <div class="col-6">
        <input form="addForm" type="number" id="count" name="count" value={{ $count }} class="form-control">
    </div>
    <div class="col-3 d-grid">
        <input form="addForm" type="submit" class="btn btn-primary" value="決定">
    </div>
</div>

@if($count > 0)
<p class="text-end mb-0">薬・サプリメントの名称を入力してください</p>

@include('commons.input', [
    'label' => '名称',
    'type' => 'text',
    'id' => 'drugName',
    'name' => 'name',
    'placeholder' => '20文字以内'
])

<p class="text-end mb-0">
    摂取する時間・タイミングを入力してください。<br>
    （例：朝、PM10:00など）<br>

</p>

@for($i = 1; $i <= $count; $i++)
@include('commons.input', [
    'label' => '時間'. $i,
    'type' => 'text',
    'id' => 'times[' . $i . ']',
    'name' => 'times[]',
    'placeholder' => '10文字以内'
])
@endfor

@include('commons.submit', [
    'name' => '新規追加',
    'color' => 'primary'
])
@endif


@include('commons.formEnd', [
    'title' => '新規追加'
])

    <div class="text-center">
        <a href="{{ route('mypage', ['userId' => Auth::id()]) }}" class="btn btn-secondary">マイページに戻る</a>
    </div>
</div>

@endsection