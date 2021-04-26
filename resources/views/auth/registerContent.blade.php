@include('commons.formStart',[
    'title' => 'ユーザー登録',
    'method' => 'post',
    'action' => route('sinup.post')
])

@include('commons.input', [
    'label' => 'ユーザー名',
    'type' => 'text',
    'id' => 'userName',
    'name' => 'name',
    'placeholder' => 'ユーザー名'
])

@include('commons.input', [
    'label' => 'パスワード',
    'type' => 'password',
    'id' => 'password',
    'name' => 'password',
    'placeholder' => 'パスワード'
])

@include('commons.input', [
    'label' => 'パスワード（確認）',
    'type' => 'password',
    'id' => 'password_confirmation',
    'name' => 'password_confirmation',
    'placeholder' => 'もう一度入力してください'
])

@include('commons.submit', [
    'name' => 'ユーザー登録',
    'color' => 'primary'
])

@include('commons.formEnd', [
    'title' => 'ユーザー登録'
])
