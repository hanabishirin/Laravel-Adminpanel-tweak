@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.school.management') . ' | ' . trans('labels.backend.school.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.school.management') }}
    </h1>
@endsection

@section('content')

    <div class="box box-info">
        {{ Form::model($schools, ['route' => ['admin.schools.update', $schools], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'main_form']) }}

        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.school.edit') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.includes.partials.school-header-button')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            {{-- Name --}}
            <div class="form-group">
                {{ Form::label('Name', trans('validation.attributes.backend.school.name'), ['class' => 'col-lg-2 control-label required', 'required' => 'required']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.name')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Address --}}
            <div class="form-group">
                {{ Form::label('Address', trans('validation.attributes.backend.school.address'), ['class' => 'col-lg-2 control-label required', 'required' => 'required']) }}

                <div class="col-lg-10">
                    {{ Form::text('address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.address')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- City --}}
            <div class="form-group">
                {{ Form::label('City', trans('validation.attributes.backend.school.city'), ['class' => 'col-lg-2 control-label required', 'required' => 'required']) }}

                <div class="col-lg-10">
                    {{ Form::text('city', null, ['list'=> 'city', 'class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.city')]) }}

                    <datalist id="city">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                    </datalist>
                </div><!--col-lg-10-->

                {{--<div class="col-lg-10">--}}
                    {{--{{ Form::select('city', array('attach' => trans('labels.backend.nonmls.select.p_type.attach')), 'all', ['class' => 'form-control select2 box-size']) }}--}}
                {{--</div><!--col-lg-3-->--}}
            </div><!--form control-->

            {{-- Latitude --}}
            {{--<div class="form-group">--}}
            {{--{{ Form::label('Latitude', trans('validation.attributes.backend.school.latitude'), ['class' => 'col-lg-2 control-label required']) }}--}}

            {{--<div class="col-lg-10">--}}
            {{ Form::hidden('latitude', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.latitude')]) }}
            {{--</div><!--col-lg-10-->--}}
            {{--</div><!--form control-->--}}

            {{-- Longitude --}}
            {{--<div class="form-group">--}}
            {{--{{ Form::label('Longitude', trans('validation.attributes.backend.school.longitude'), ['class' => 'col-lg-2 control-label required']) }}--}}

            {{--<div class="col-lg-10">--}}
            {{ Form::hidden('longitude', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.longitude')]) }}
            {{--</div><!--col-lg-10-->--}}
            {{--</div><!--form control-->--}}

            {{-- Type --}}
            <div class="form-group">
                {{ Form::label('Type', trans('validation.attributes.backend.school.type'), ['class' => 'col-lg-2 control-label required', 'required' => 'required']) }}

                <div class="col-lg-10">
                    {{ Form::text('type', null, ['list'=> 'type', 'class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.type')]) }}

                    <datalist id="type">
                        <option value="0">Primary School</option>
                        <option value="1">High school</option>
                        <option value="2">University</option>
                        <option value="3">Middle school</option>
                    </datalist>
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Public --}}
            <div class="form-group">
                {{ Form::label('Public', trans('validation.attributes.backend.school.is_public'), ['class' => 'col-lg-2 control-label required', 'required' => 'required']) }}

                <div class="col-lg-1">
                    <div class="control-group">
                        <label class="control control--checkbox">
                            {{ Form::checkbox('is_public', '1') }}
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                </div><!--col-lg-1-->
            </div><!--form control-->

            {{-- School Zone --}}
            <div class="form-group">
                {{ Form::label('School Zone', trans('validation.attributes.backend.school.school_zone'), ['class' => 'col-lg-2 control-label required', 'required' => 'required']) }}

                <div class="col-lg-10">
                    {{ Form::text('school_zone', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.school_zone')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- City Rank --}}
            <div class="form-group">
                {{ Form::label('City Rank', trans('validation.attributes.backend.school.ranking_city'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('ranking_city', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.ranking_city')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- State Rank --}}
            <div class="form-group">
                {{ Form::label('State Rank', trans('validation.attributes.backend.school.ranking_state'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('ranking_state', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.ranking_state')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- City Rank in Five Years --}}
            <div class="form-group">
                {{ Form::label('City Rank in Five Years', trans('validation.attributes.backend.school.ranking_city_5_years'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('ranking_city_5_years', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.ranking_city_5_years')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- State Rank in Five Years --}}
            <div class="form-group">
                {{ Form::label('State Rank in Five Years', trans('validation.attributes.backend.school.ranking_state_5_years'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('ranking_state_5_years', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.school.ranking_state_5_years')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
        </div><!-- /.box-body -->

        {{ Form::close() }}

        <div class="box-body">

            {{ Form::open(['route' => 'admin.nonmlsproperties.store', 'class' => 'dropzone drop_custom', 'role' => 'form', 'method' => 'post', 'id' =>"upload_image", 'enctype' => "multipart/form-data"]) }}
            {{ csrf_field() }}
            <div class="dz-message">
                <div class="message">
                    <p>Drop files here or Click to Upload</p>
                </div>
            </div>
            {{ Form::close() }}

            <div class="edit-form-btn">
                <a href="{{ route('admin.schools.index') }}" class="btn btn-danger btn-md">Cancel</a>
                <input id="form_submit" type="submit" value="Create" class="btn btn-primary btn-md">
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--box-->

@endsection

@section('after-scripts')
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECyd49Xa-WuK9Ta9qU1VvRVQaEtGJ9gs&libraries=places&callback=initMap"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>
    <script type="text/javascript">
        Backend.Utils.documentReady(function(){
            csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            Backend.Users.selectors.getPremissionURL = "{{ route('admin.get.permission') }}";
            Backend.Users.init("edit");
        });
        window.onload = function () {
            Backend.Users.windowloadhandler();
        };

        function initMap() {
        }

        function findLatLong(address){
            var geocoder = new google.maps.Geocoder();
            //var mapCenter = new google.maps.LatLng(49.284487,-123.121891);

            geocoder.geocode( { 'address': address}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();
                    $("input[name*='latitude']").val(latitude);
                    $("input[name*='longitude']").val(longitude);
                    console.log(latitude);
                }
            });
        }

        $(document).ready(function() {
            $("input[name*='address']").change(function() {
                var address = $("input[name*='address']").val();

                findLatLong(address);
            });
        });

        $('#form_submit').click(function(e) {
            e.preventDefault();
            $("#main_form").submit();
        });

        Dropzone.options.uploadImage = {
            uploadMultiple: true,
            parallelUploads: 2,
            maxFilesize: 16,
            addRemoveLinks: true,
            dictFileTooBig: 'Image is larger than 16MB',
            timeout: 10000,
            acceptedFiles: 'image/*',
            dictInvalidFileType: "This is not an image",
            dictRemoveFile: 'Remove',

            init: function () {
                // var myDropzone = this;
                // $.get('/server-images', function(data) {
                //
                //     $.each(data.images, function (key, value) {
                //
                //         var file = {name: value.original, size: value.size};
                //         myDropzone.options.addedfile.call(myDropzone, file);
                //         myDropzone.options.thumbnail.call(myDropzone, file, 'images/icon_size/' + value.server);
                //         myDropzone.emit("complete", file);
                //     });
                // });


                this.on("success", function (file, done) {
                    console.log("test");
                });

                this.on("removedfile", function (file) {
                    $.post({
                        url: "{{ route('admin.nonmlsproperties.store') }}",
                        data: {id: file.name, _token: $('[name="_token"]').val()},
                        dataType: 'json',
                        success: function (data) {
                            console.log("test again");
                        }
                    });
                });
            },
        };

        function getImageSizeInBytes(imgURL) {

        }
    </script>
@endsection
