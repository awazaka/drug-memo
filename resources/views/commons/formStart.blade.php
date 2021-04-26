<!-- フォーム：{{ $title }}・始 -->
<div class="border rounded-2 p-3 mx-auto mb-3" style="max-width:700px; background-color:lightcyan;">
    <h2 class="text-center">{{ $title }}</h2>
    <form method="{{ $method }}" action="{{ $action }}">
    {{ csrf_field() }}
