<div class="{{$viewClass['form-group']}}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">
        <div class="card-group btn-group-toggle radio-card-group">
            @foreach($options as $option => $label)
                <label class="card {{ ($option == old($column, $value)) || ($value === null && in_array($label, $checked)) ?admin_theme('bg-%s'):'' }}">
                    <div class="card-body">
                    <input type="radio" name="{{$name}}" value="{{$option}}" class="{{$class}} d-none" {{ ($option == old($column, $value)) || ($value === null && in_array($label, $checked)) ?'checked':'' }} {!! $attributes !!} />&nbsp;{{$label}}&nbsp;&nbsp;
                    </div>
                </label>
            @endforeach
        </div>

        @include('admin::form.help-block')

    </div>
</div>

<script>
    $('.radio-card-group label').click(function () {
        $(this).addClass('bg-@theme').siblings().removeClass('bg-@theme');
    });
</script>

<style>
    .card-group label {
        cursor: pointer;
        margin-right: 8px;
        font-weight: 400;
    }

    .card-group .card {
        margin-bottom: 0px;
    }

    .card-group .card-body {
        padding: 10px 15px;
    }
</style>
