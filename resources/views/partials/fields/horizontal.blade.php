<div class="form-group row row-cols-sm-2 align-items-baseline">
    @isset($title)
        <label for="{{$id}}" class="col-sm-3 text-wrap form-label">
            {{$title}}

            <x-orchid-popover :content="$popover ?? ''"/>

            @if(isset($attributes['required']) && $attributes['required'])
                <sup class="text-danger">*</sup>
            @endif
        </label>
    @endisset

    <div class="col col-md-8">
        {{$slot}}

        @if($errors->has($oldName))
            <div class="invalid-feedback d-block">
                <small>{{$errors->first($oldName)}}</small>
            </div>
        @elseif(isset($help))
            <small class="form-text text-muted">{!!$help!!}</small>
        @endif
    </div>
</div>

@isset($hr)
    <div class="line line-dashed border-bottom my-3"></div>
@endisset
