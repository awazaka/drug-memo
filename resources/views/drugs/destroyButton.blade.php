<form method="post" action="{{ route('destroyDrug', ['drugId' => $drug->id ]) }}">
    {{ csrf_field() }}
    @method('delete')
    <input type="submit" value="削除" class="btn btn-danger btn-sm">
</form>