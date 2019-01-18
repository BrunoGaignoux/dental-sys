<div class="{{ $classe }}">
    <form action="{{ $searchRoute }}">
        <div class="box box-{{ $color }}">
            <div class="box-header">
                <h1 class="box-title">{{ $searchTitle }}</h1>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="{{ $searchName }}" style="width: 100% !important;">
                        <input type="text" class="form-control" name="{{ $searchName }}" placeholder="{{ $searchPlaceholder }}">
                    </label>
                </div>
                {{ $searchField }}
            </div>
        </div>
        <div class="box box-{{ $color }}">
            <div class="box-header">
                <h1 class="box-title">{{ $filterTitle }}</h1>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="{{ $filterName }}" style="width: 100% !important;">
                        <select class="form-control" name="{{ $filterName }}" id="{{ $filterName }}">
                            <option value="">Selecione o {{ $defaultOption }}</option>
                            @foreach($selectOptions as $option)
                                <option value="{{$option->id}}">{{$option->value}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                {{ $filterField }}
            </div>
        </div>
        <button type="submit" class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px; width: 100%">Pesquisar</button>
    </form>
</div>