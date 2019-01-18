<div class="{{ $col }}">
    <div class="form-group">
        <label for="{{ $labelName }}">{{ isset($name) ? $name : null }}</label>
        <input type="password" class="form-control" id="{{ $labelName }}" name="{{ $labelName }}" placeholder="{{ isset($placeholder) ? $placeholder : null }}" required>
    </div><!-- /.form-group -->
</div><!-- /.col -->