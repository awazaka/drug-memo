<!-- 記録セル・始 -->
<div class="col-4 text-center p-2">
    <div class="rounded-3 p-2" style="background-color:aquamarine">    
        @if ($time->histories()->where('status', 'take')->where('date', $date)->exists())
        <h3 class="m-0">
            〇
        </h3>
        <div>
            やっぱり
            @include('drugs.forgetButton')
        </div>
        <small class="m-0">
            {{ $time->time }}
        </small>
        @elseif ($time->histories()->where('status', 'forget')->where('date', $date)->exists())
        <h3 class="m-0">
            ✕
        </h3>
        <div>
            やっぱり
            @include('drugs.takeButton')
        </div>
        <small class="m-0">
            {{ $time->time }}
        </small>
        @else
        <h2 class="m-0">
            {{ $time->time }}
        </h2>
        <div class="btn-group">
            @include('drugs.takeButton')
            @include('drugs.forgetButton')
        </div>
        @endif
    </div>
</div>
<!-- 記録セル・終 -->
