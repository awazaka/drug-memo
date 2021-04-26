<!-- 入力：{{ $name }}・始 -->
<div class="row mb-3">
    <div class="col-4 text-end">
        <label for="{{ $id }}" class="col-form-label">{{ $label }}</label>
    </div>
    <div class="col-8">
        <input type="{{ $type }}" placeholder="{{ $placeholder }}" id="{{ $id }}" name="{{ $name }}" class="form-control">
    </div>
</div>
<!-- 入力：{{ $name }}・終 -->
