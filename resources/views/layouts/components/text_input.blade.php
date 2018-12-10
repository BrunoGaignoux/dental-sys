<div class="{{ $col }}">
    <div class="form-group">
        <label for="{{ $labelName }}">{{ isset($name) ? $name : null }}</label>
        <input type="text" class="form-control" id="{{ $labelName }}" name="{{ $labelName }}" value="{{ isset($value) ? $value : null }}" placeholder="{{ isset($placeholder) ? $placeholder : null }}" required>
    </div><!-- /.form-group -->
</div><!-- /.col -->