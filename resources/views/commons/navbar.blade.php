<!-- ナビゲーションバー・始 -->
<nav class="navbar navbar-expand navbar-light" style="background-color:aquamarine">
    <div class="container-fluid">
        <a href="{{ route('top') }}"class="navbar-brand">薬・サプリ記録帳</a>
        <ul class="navbar-nav">
            @if (Auth::check())
            <li class="nav-item"><a href="{{ route('mypage', ['userId' => Auth::id()]) }}" class="nav-link">マイページ</a></li>
            <li class="nav-item"><a href="{{ route('logout.get') }}" class="nav-link">ログアウト</a></li>
            @else
            <li class="nav-item"><a href="{{ route('gate.get') }}" class="nav-link">ユーザー登録・ログイン</a></li>
            @endif
        </ul>
    </div>
</nav>
<!-- ナビゲーションバー・終 -->
