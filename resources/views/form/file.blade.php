<div class="{{$viewClass['form-group']}}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">
        <input type="file" class="{{$class}}" name="{{$name}}" {!! $attributes !!} />
        @include('admin::form.help-block')
    </div>
</div>

<script require="fileinput">
    var $input = $("input{{ $selector }}");
    $input.fileinput({!! $options !!});

    @if($settings['showRemove'])
    $input.on('filebeforedelete', function() {
        return new Promise(function(resolve, reject) {
            var remove = resolve;
            $.admin.swal.fire({
                title: "{{ trans('admin.delete_confirm') }}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "{{ trans('admin.confirm') }}",
                showLoaderOnConfirm: true,
                cancelButtonText: "{{ trans('admin.cancel') }}",
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        resolve(remove());
                    });
                }
            });
        });
    });
    @endif
</script>
