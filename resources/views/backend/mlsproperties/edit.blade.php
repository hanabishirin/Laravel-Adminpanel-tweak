@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.mls.management') . ' | ' . trans('labels.backend.mls.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.mls.management') ." " . $mls->mls_number}}
    </h1>
@endsection

@section('content')
    {{ Form::model($mls, ['route' => ['admin.mlsproperties.update', $mls], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.mls.edit') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.access.includes.partials.user-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">

            {{-- Property Status ID --}}
            <div class="form-group">
                {{ Form::label('Property Status ID', trans('validation.attributes.backend.mls.property_status_id'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('property_status_id', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.mls.property_status_id')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Is Open House （hidden） --}}
            <div class="form-group">
                {{ Form::label('Is Open House', trans('validation.attributes.backend.mls.is_openHouse'), ['class' => 'col-lg-2 control-label required']) }}
                <div class="col-lg-1">
                    <div class="control-group">
                        <label class="control control--checkbox">
                            {{ Form::checkbox('is_openHouse', '1') }}
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                </div><!--col-lg-1-->
            </div><!--form control-->

            {{-- Chinese Description --}}
            <div class="form-group">
                {{ Form::label('Chinese Description', trans('validation.attributes.backend.mls.Chinese_description'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('Chinese_description', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.mls.Chinese_description')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="edit-form-btn">
                {{ link_to_route('', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                <div class="clearfix"></div>
            </div>
        </div><!-- /.box-body -->
    </div><!--box-->

    @if ($user->id == 1)
        {{ Form::hidden('status', 1) }}
        {{ Form::hidden('confirmed', 1) }}
        {{ Form::hidden('assignees_roles[]', 1) }}
    @endif

    {{ Form::close() }}
@endsection

@section('after-scripts')
    <script type="text/javascript">
        Backend.Utils.documentReady(function(){
            csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            Backend.Users.selectors.getPremissionURL = "{{ route('admin.get.permission') }}";
            Backend.Users.init("edit");
        });
        window.onload = function () {
            Backend.Users.windowloadhandler();
        };

    </script>
@endsection
