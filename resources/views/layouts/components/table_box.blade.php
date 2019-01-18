<div class="{{ $classe }}">
    <div class="box box-{{ $color }}">
        {{ isset($header) ? $header : null }}
        <div class="box-body">
            <div style="overflow-x:auto;">
                {{ $include }}
            </div>
        </div>
    </div>
    <div class="text-center">
        {{isset($paginate) ? $paginate : null}}
    </div>
</div>