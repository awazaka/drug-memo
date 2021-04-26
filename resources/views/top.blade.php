@extends('layouts.default')

@section('title', 'TOP')

@section('main')

<div class="container-fluid p-3" style="background-image:url(./images/drugs.jpg); background-size:cover;">
    <div class="text-center p-3" style="background-color:rgba(224, 255, 255, 0.5)">
        <h1 class="border-bottom border-2 border-dark">サプリ記録</h1>
        <p class="m-0">
            薬・サプリメントなどの摂取を管理・記録するためのWebサイトです。<br>
            ユーザー登録することでご利用できます。<br>
            ※登録には個人情報は一切必要ありません。
        </p>
    </div>
</div>

<div class="container-fluid bg-light p-3">
    <div class="text-center mb-3">
        <p class="m-0">サービスのご利用はこちらから</p>
        <a href={{ route('gate.get') }} class="btn btn-primary">ユーザ登録 / ログイン</a>
    </div>

    <div class="border-top border-secondary pt-3">
        <p class="text-center">ご利用方法はこちらを参考ください。</p>

        <div class="border border-secondary rounded-3 p-2 mb-2" style="background-color:lightcyan;">
            <p class="m-0">ログイン後のページは下図のようになっています。</p>
            <img src="./images/マイページ一部記入.jpg" class="mx-auto my-1 d-block" style="max-width:100%;">
            <p class="m-0">所定の時間で服用した場合は「〇」ボタンを、服用を忘れた場合は「✕」ボタンを押して記録をしてください。</p>
        </div>
        <div class="border border-secondary rounded-3 p-2 mb-2" style="background-color:lightcyan;">
            <p class="m-0">「＋新規追加」ボタンを押すと追加用フォームへと移動します。</p>        
            <img src="./images/入力後.jpg" class="mx-auto my-1 d-block" style="max-width:100%;">
            <p class="m-0">
                摂取回数：１日で摂取する回数を入力してください。<br>
                名称：薬・サプリメントの名称を入力してください。<br>
                時間：摂取する時間・タイミングを入力してください。
            </p>
        </div>
        <div class="border border-secondary rounded-3 p-2 mb-2" style="background-color:lightcyan;">
            <p class="m-0">「カレンダー」ボタンを押すとカレンダーへと移動します。</p>
            <img src="./images/カレンダー.jpg" class="mx-auto my-1 d-block" style="max-width:100%;">
            <p class="m-0">
                記録に基づいて「〇」「✕」「？」が表示されます。<br>
                〇：全ての時間で服用した<br>
                ✕：服用を忘れた<br>
                ？：記録漏れがあった<br>
                空白：記録なし
            </p>
        </div>

    </div>
</div>



@endsection