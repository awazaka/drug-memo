@include('commons.formStart',[
    'title' => 'ログイン',
    'method' => 'post',
    'action' => route('login.post')
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

@include('commons.submit', [
    'name' => 'ログイン',
    'color' => 'primary'
])

@include('commons.formEnd', [
    'title' => 'ログイン'
])
