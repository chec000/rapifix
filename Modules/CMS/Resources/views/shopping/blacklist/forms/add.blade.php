<h1> {{trans('admin::shopping.blacklist.add.new_blacklist')}}</h1>
<p class="text-right"><a href="{{ route('admin.blacklist.list') }}">{{trans('admin::shopping.blacklist.add.back_list')}}</a></p>
{!! Form::open( ['id'=>'form_add_blacklist']) !!}


<fieldset class="fieldset_gray">
    <legend class="legend_gray">{!! trans('admin::shopping.blacklist.add.legend_add') !!}</legend>
    <div class="col-md-6">
        <div class="form-group   {!! FormMessage::getErrorClass('country_id') !!}">
            {!! Form::label('country_id', trans('admin::shopping.blacklist.add.country'), ['class' => 'control-label']) !!}
            {!! Form::select('country_id', $countries, Request::input('country_id'),array('required','class' => 'form-control'
            , 'name' => 'country_id', 'id' => 'multiselect_country_id')) !!}
            <span class="help-block">{!! FormMessage::getErrorMessage('country_id') !!}</span>
        </div>
    </div>
        <div class="col-md-6">
            <div  class= "form-group {!! FormMessage::getErrorClass('eo_number') !!}">
                {!! Form::label('eo_number', trans('admin::shopping.blacklist.add.eo_number'), ['class' => 'control-label']) !!}

                {!! Form::text('eo_number', isset($blacklist->eo_number)? $blacklist->eo_number:'', ['required','class' => 'form-control','id'=>'eo_number']) !!}
                <span class="help-block">{!! FormMessage::getErrorMessage('eo_number') !!}</span>
            </div>

        </div>





        



        <div class="row">
                    <div class="col-md-12">

                        <p class="text-danger">{!!$validacion!!}</p>

                    </div>
    </div>
</fieldset>






@if(!empty($msg))
<p class="alert alert-danger">{!!$msg!!}</p>
@endif




<div class="form-group">
        <button class='btn btn-primary addButton' type="submit">
        {{trans('admin::shopping.blacklist.add.btn_add')}}
    </button>

</div>

{!! Form::close() !!}

@section('scripts')
<script type="text/javascript">



    $(document).ready(function () {
        load_editor_js();


    });








    $('#parent_id').on('change', function (e) {
        //  var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        $.ajax({
            url: route('admin.menu.order'),
            type: 'POST',
            data: {menu_id: valueSelected},
            success: function (data) {
                if (data !== null) {
                    $('#order').val(data.order + 1);
                }
            }
        });
    });


</script>
@stop