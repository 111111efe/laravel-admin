<div class="{{$viewClass['form-group']}}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            @foreach($options as $option => $label)
                <label class="btn btn-@color {{ ($option == old($column, $value)) || ($value === null && in_array($label, $checked)) ?'active':'' }}">
                    <input type="radio" name="{{$name}}" value="{{$option}}" class="{{$class}}" {{ ($option == old($column, $value)) || ($value === null && in_array($label, $checked)) ?'checked':'' }} {!! $attributes !!} />&nbsp;{{$label}}&nbsp;&nbsp;
                </label>
            @endforeach
        </div>

        @include('admin::form.help-block')

    </div>
</div>
