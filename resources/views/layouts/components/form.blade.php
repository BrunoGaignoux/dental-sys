<form action="{{ $route }}" method="{{ $method }}">
    {!! csrf_field() !!}
    <input type="hidden" name="{{ isset($hiddenName) ? $hiddenName : null }}" value="{{ isset($hiddenId) ? $hiddenId : null }}">
    {{ $inputs }}
    <div class="box-footer {{ isset($divClass) ? $divClass : null }}">
        <button type="submit" class="btn btn-{{ $buttonStyle }}">{{ $submitButton }}</button>
    </div>
</form>