@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.nonmls.management') . ' | ' . trans('labels.backend.nonmls.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.nonmls.management') }}
    </h1>
@endsection

@section('content')
    <div class="box box-info">
        {{ Form::model($nonmls, ['route' => ['admin.nonmlsproperties.update', $nonmls], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'main_form']) }}

        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.nonmls.edit') }}</h3>

            {{--<div class="box-tools pull-right">--}}
            {{--@include('backend.access.includes.partials.user-header-buttons')--}}
            {{--</div><!--box-tools pull-right-->--}}
        </div><!-- /.box-header -->

        <div class="box-body">
            {{-- Area --}}
            <div class="form-group">
                {{ Form::label('Area', trans('validation.attributes.backend.nonmls.area'), ['class' => 'col-lg-2 control-label required']) }}

                <?php $array = array( 'area' => trans('labels.backend.nonmls.select.p_type.attach'), 'detach' => trans('labels.backend.nonmls.select.p_type.detach'), 'land' => trans('labels.backend.nonmls.select.p_type.land'));
                $key = array_search($nonmls->area, $array);?>
                <div class="col-lg-10">
                    {{ Form::select('area',$array, $key, ['class' => 'form-control select2 box-size']) }}
                </div><!--col-lg-3-->
            </div><!--form control-->

            {{-- Price --}}
            <div class="form-group">
                {{ Form::label('Price', trans('validation.attributes.backend.nonmls.asking_price'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('asking_price', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.asking_price')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Price History --}}
            <div class="form-group">
                {{ Form::label('Price History', trans('validation.attributes.backend.nonmls.price_history'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('price_history', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.price_history_c')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Unit Number --}}
            <div class="form-group">
                {{ Form::label('Unit Number', trans('validation.attributes.backend.nonmls.unit_number'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('unit_number', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.unit_number'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Address --}}
            <div class="form-group">
                {{ Form::label('Address', trans('validation.attributes.backend.nonmls.address'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.address')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- City --}}
            <div class="form-group">
                {{ Form::label('City', trans('validation.attributes.backend.nonmls.city'), ['class' => 'col-lg-2 control-label required']) }}

                <?php $array = array( 'city' => trans('labels.backend.nonmls.select.p_type.attach'), 'detach' => trans('labels.backend.nonmls.select.p_type.detach'), 'land' => trans('labels.backend.nonmls.select.p_type.land'));
                $key = array_search($nonmls->city, $array);?>
                <div class="col-lg-10">
                    {{ Form::select('p_type',$array, $key, ['class' => 'form-control select2 box-size']) }}
                </div><!--col-lg-3-->
            </div><!--form control-->

            {{-- State --}}
            <div class="form-group">
                {{ Form::label('State', trans('validation.attributes.backend.nonmls.state'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('state', "BC", ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.state')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Postal --}}
            <div class="form-group">
                {{ Form::label('Postal', trans('validation.attributes.backend.nonmls.postal'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('postal', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.postal')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- List Date --}}
            <div class="form-group">
                {{ Form::label('List Date', trans('validation.attributes.backend.nonmls.list_date'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::date('list_date', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.list_date')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Update Date --}}
            <div class="form-group">
                {{ Form::label('Update Date', trans('validation.attributes.backend.nonmls.update_date'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::date('update_date', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.update_date')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Image Count --}}
            <div class="form-group">
                {{ Form::label('Image Count', trans('validation.attributes.backend.nonmls.image_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('image_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.image_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Latitude --}}
            {{--<div class="form-group">--}}
            {{--{{ Form::label('Latitude', trans('validation.attributes.backend.nonmls.latitude'), ['class' => 'col-lg-2 control-label required']) }}--}}

            {{--<div class="col-lg-10">--}}
            {{ Form::hidden('latitude', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.latitude')]) }}
            {{--</div><!--col-lg-10-->--}}
            {{--</div><!--form control-->--}}

            {{-- Longitude --}}
            {{--<div class="form-group">--}}
            {{--{{ Form::label('Longitude', trans('validation.attributes.backend.nonmls.longitude'), ['class' => 'col-lg-2 control-label required']) }}--}}

            {{--<div class="col-lg-10">--}}
            {{ Form::hidden('longitude', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.longitude')]) }}
            {{--</div><!--col-lg-10-->--}}
            {{--</div><!--form control-->--}}

            {{-- Unit Price --}}
            <div class="form-group">
                {{ Form::label('Unit Price', trans('validation.attributes.backend.nonmls.price_sqft'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('price_sqft', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.price_sqft')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Property Type (select)--}}
            <div class="form-group">
                {{ Form::label('Property Type', trans('validation.attributes.backend.nonmls.p_type'), ['class' => 'col-lg-2 control-label required']) }}

                <?php $array = array( 'attach' => trans('labels.backend.nonmls.select.p_type.attach'), 'detach' => trans('labels.backend.nonmls.select.p_type.detach'), 'land' => trans('labels.backend.nonmls.select.p_type.land'));
                $key = array_search($nonmls->p_type, $array);?>
                <div class="col-lg-10">
                    {{ Form::select('p_type',$array, $key, ['class' => 'form-control select2 box-size']) }}
                </div><!--col-lg-3-->
            </div><!--form control-->

            {{-- Property Layout --}}
            <div class="form-group">
                {{ Form::label('Property Layout', trans('validation.attributes.backend.nonmls.p_layout'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('p_layout', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.p_layout')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Brokerage (default: None) --}}
            <div class="form-group">
                {{ Form::label('Brokerage', trans('validation.attributes.backend.nonmls.brokerage'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('brokerage', trans('validation.attributes.backend.nonmls.brokerage_default'), ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.brokerage')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- School List --}}
            {{--<div class="form-group">--}}
            {{--{{ Form::label('School List', trans('validation.attributes.backend.nonmls.school_listing'), ['class' => 'col-lg-2 control-label required']) }}--}}

            {{--<div class="col-lg-10">--}}
            {{--{{ Form::text('school_listing', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.school_listing')]) }}--}}
            {{--</div><!--col-lg-10-->--}}
            {{--</div><!--form control-->--}}

            {{-- Image URL --}}
            {{--<div class="form-group">--}}
            {{--{{ Form::label('Image URL', trans('validation.attributes.backend.nonmls.imageURL'), ['class' => 'col-lg-2 control-label required']) }}--}}

            {{--<div class="col-lg-10">--}}
            {{--{{ Form::text('imageURL', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.imageURL')]) }}--}}
            {{--</div><!--col-lg-10-->--}}
            {{--</div><!--form control-->--}}

             {{--Property Status ID (hidden)--}}
            <div class="form-group">
                {{ Form::label('Property Status ID', trans('validation.attributes.backend.nonmls.property_status_id'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('property_status_id', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.property_status_id')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Is Open House （hidden） --}}
            <div class="form-group">
                {{ Form::label('Is Open House', trans('validation.attributes.backend.nonmls.is_openHouse'), ['class' => 'col-lg-2 control-label required']) }}
                <div class="col-lg-1">
                    <div class="control-group">
                        <label class="control control--checkbox">
                            {{ Form::checkbox('is_openHouse', '1') }}
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                </div><!--col-lg-1-->
            </div><!--form control-->

            {{-- Description --}}
            <div class="form-group">
                {{ Form::label('Description', trans('validation.attributes.backend.nonmls.description'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('description', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.description')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Chinese Description --}}
            <div class="form-group">
                {{ Form::label('Chinese Description', trans('validation.attributes.backend.nonmls.Chinese_description'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('Chinese_description', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.Chinese_description')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Community (searchable select)--}}
            <div class="form-group">
                {{ Form::label('Community', trans('validation.attributes.backend.nonmls.community'), ['class' => 'col-lg-2 control-label']) }}

                <?php $array = array( 'community' => trans('labels.backend.nonmls.select.p_type.attach'), 'detach' => trans('labels.backend.nonmls.select.p_type.detach'), 'land' => trans('labels.backend.nonmls.select.p_type.land'));
                $key = array_search($nonmls->community, $array);?>
                <div class="col-lg-10">
                    {{ Form::select('p_type',$array, $key, ['class' => 'form-control select2 box-size']) }}
                </div><!--col-lg-3-->
            </div><!--form control-->

            {{-- Dwelling (select)--}}
            <div class="form-group">
                {{ Form::label('Dwelling', trans('validation.attributes.backend.nonmls.dwelling'), ['class' => 'col-lg-2 control-label']) }}

                <?php $array = array( 'dwelling' => trans('labels.backend.nonmls.select.p_type.attach'), 'detach' => trans('labels.backend.nonmls.select.p_type.detach'), 'land' => trans('labels.backend.nonmls.select.p_type.land'));
                $key = array_search($nonmls->dwelling, $array);?>
                <div class="col-lg-10">
                    {{ Form::select('p_type',$array, $key, ['class' => 'form-control select2 box-size']) }}
                </div><!--col-lg-3-->
            </div><!--form control-->

            {{-- Title to Land (checkbox)--}}
            <div class="form-group">
                {{ Form::label('Title to Land', trans('validation.attributes.backend.nonmls.title_to_land'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-1">
                    <div class="control-group">
                        <label class="control control--checkbox">
                            {{ Form::checkbox('title_to_land', '1', false) }}
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                </div><!--col-lg-1-->
            </div><!--form control-->

            {{-- Zone --}}
            <div class="form-group">
                {{ Form::label('Zone', trans('validation.attributes.backend.nonmls.zoning'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('zoning', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.zoning')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Foundation --}}
            <div class="form-group">
                {{ Form::label('Foundation', trans('validation.attributes.backend.nonmls.foundation'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('foundation', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.foundation')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Build Year --}}
            <div class="form-group">
                {{ Form::label('Build Year', trans('validation.attributes.backend.nonmls.built_year'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('built_year', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.built_year')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- House Age --}}
            <div class="form-group">
                {{ Form::label('House Age', trans('validation.attributes.backend.nonmls.age'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::number('age', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.age')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- View --}}
            <div class="form-group">
                {{ Form::label('View', trans('validation.attributes.backend.nonmls.view'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('view', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.view')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Style --}}
            <div class="form-group">
                {{ Form::label('Style', trans('validation.attributes.backend.nonmls.style'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('style', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.style')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Service --}}
            <div class="form-group">
                {{ Form::label('Service', trans('validation.attributes.backend.nonmls.service'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('service', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.service')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Water Supply --}}
            <div class="form-group">
                {{ Form::label('Water Supply', trans('validation.attributes.backend.nonmls.water'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('water', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.water')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Construction Material --}}
            <div class="form-group">
                {{ Form::label('Construction Material', trans('validation.attributes.backend.nonmls.construction'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('construction', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.construction')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{--Eexterior --}}
            <div class="form-group">
                {{ Form::label('Exterior', trans('validation.attributes.backend.nonmls.exterior'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('exterior', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.exterior')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Roof Material --}}
            <div class="form-group">
                {{ Form::label('Roof Material', trans('validation.attributes.backend.nonmls.roof'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('roof', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.roof')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Parking Type --}}
            <div class="form-group">
                {{ Form::label('Parking Type', trans('validation.attributes.backend.nonmls.parking_type'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('parking_type', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.parking_type')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Parking Location --}}
            <div class="form-group">
                {{ Form::label('Parking Location', trans('validation.attributes.backend.nonmls.parking_loc'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('parking_loc', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.parking_loc')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Site Influence --}}
            <div class="form-group">
                {{ Form::label('Site Influence', trans('validation.attributes.backend.nonmls.site_inf'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('site_inf', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.site_inf')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Outdoor Area --}}
            <div class="form-group">
                {{ Form::label('Outdoor Area', trans('validation.attributes.backend.nonmls.outdoor'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('outdoor', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.outdoor')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Heating Type --}}
            <div class="form-group">
                {{ Form::label('Heating Type', trans('validation.attributes.backend.nonmls.heating'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('heating', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.heating')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Fire Place Fuel Type --}}
            <div class="form-group">
                {{ Form::label('Fire Place Fuel Type', trans('validation.attributes.backend.nonmls.fireplace_fuel'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('fireplace_fuel', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.fireplace_fuel')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Floor Finishing --}}
            <div class="form-group">
                {{ Form::label('Floor Finishing', trans('validation.attributes.backend.nonmls.floor_finish'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('floor_finish', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.floor_finish')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Included Features (multi select) --}}
            <div class="form-group">
                {{ Form::label('Included Features', trans('validation.attributes.backend.nonmls.features'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('features', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.features')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Amenities (multi select) --}}
            <div class="form-group">
                {{ Form::label('Amenities', trans('validation.attributes.backend.nonmls.amenities'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('amenities', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.amenities')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Maintenance Fee Includes --}}
            <div class="form-group">
                {{ Form::label('Maintenance Fee Includes', trans('validation.attributes.backend.nonmls.include_maint_fee'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('include_maint_fee', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.include_maint_fee')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- By Law Restrictions --}}
            <div class="form-group">
                {{ Form::label('By Law Restrictions', trans('validation.attributes.backend.nonmls.bylaw_rest'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('bylaw_rest', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.bylaw_rest')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Directional Exp Faces --}}
            <div class="form-group">
                {{ Form::label('Directional Exp Faces', trans('validation.attributes.backend.nonmls.facing'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('facing', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.facing')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Number of Stories --}}
            <div class="form-group">
                {{ Form::label('Number of Stories', trans('validation.attributes.backend.nonmls.stories'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('stories', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.stories')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Number of Fireplaces --}}
            <div class="form-group">
                {{ Form::label('Number of Fireplaces', trans('validation.attributes.backend.nonmls.fireplace'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('fireplace', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.fireplace')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Bedroom Number --}}
            <div class="form-group">
                {{ Form::label('Bedroom Number', trans('validation.attributes.backend.nonmls.bed_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('bed_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.bed_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Basement Bedroom Number --}}
            <div class="form-group">
                {{ Form::label('Basement Bedroom Number', trans('validation.attributes.backend.nonmls.bed_bsmt'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('bed_bsmt', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.bed_bsmt')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Total Room Number --}}
            <div class="form-group">
                {{ Form::label('Total Room Number', trans('validation.attributes.backend.nonmls.rm_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('rm_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.rm_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Kitchen Number --}}
            <div class="form-group">
                {{ Form::label('Kitchen Number', trans('validation.attributes.backend.nonmls.kitchen_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('kitchen_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.kitchen_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Half Bathroom Number --}}
            <div class="form-group">
                {{ Form::label('Half Bathroom Number', trans('validation.attributes.backend.nonmls.halfbath_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('halfbath_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.halfbath_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Full Bathroom Number --}}
            <div class="form-group">
                {{ Form::label('Full Bathroom Number', trans('validation.attributes.backend.nonmls.fullbath_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('fullbath_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.fullbath_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Bathroom Number --}}
            <div class="form-group">
                {{ Form::label('Bathroom Number', trans('validation.attributes.backend.nonmls.bath_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('bath_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.bath_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Number of Covered Parking --}}
            <div class="form-group">
                {{ Form::label('Number of Covered Parking', trans('validation.attributes.backend.nonmls.cov_park_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('cov_park_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.cov_park_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Number of Parking --}}
            <div class="form-group">
                {{ Form::label('Number of Parking', trans('validation.attributes.backend.nonmls.parking_count'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('parking_count', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.parking_count')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Total Area --}}
            <div class="form-group">
                {{ Form::label('Total Area', trans('validation.attributes.backend.nonmls.area_total'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('area_total', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.area_total'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Front Lot Size（sqft) --}}
            <div class="form-group">
                {{ Form::label('Front Lot Size（sqft)', trans('validation.attributes.backend.nonmls.lot_front_ft'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_front_ft', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_front_ft'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Front Lot Size（sqmt) --}}
            <div class="form-group">
                {{ Form::label('Front Lot Size（sqmt)', trans('validation.attributes.backend.nonmls.lot_front_mtr'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_front_mtr', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_front_mtr'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Lot Depth --}}
            <div class="form-group">
                {{ Form::label('Lot Depth', trans('validation.attributes.backend.nonmls.lot_depth_ft'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_depth_ft', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_depth_ft'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Parcel Number --}}
            <div class="form-group">
                {{ Form::label('Parcel Number', trans('validation.attributes.backend.nonmls.parcel_num'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('parcel_num', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.parcel_num')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Lot Size(sqft) --}}
            <div class="form-group">
                {{ Form::label('Lot Size(sqft)', trans('validation.attributes.backend.nonmls.lot_sqft'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_sqft', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_sqft'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Lot Size(acre) --}}
            <div class="form-group">
                {{ Form::label('Lot Size(acre)', trans('validation.attributes.backend.nonmls.lot_acre'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_acre', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_acre'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Lot Size(sqmt) --}}
            <div class="form-group">
                {{ Form::label('Lot Size(sqmt)', trans('validation.attributes.backend.nonmls.lot_sqmt'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_sqmt', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_sqmt')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Lot Size(hect) --}}
            <div class="form-group">
                {{ Form::label('Lot Size(hect)', trans('validation.attributes.backend.nonmls.lot_hect'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('lot_hect', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.lot_hect'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Gross Tax --}}
            <div class="form-group">
                {{ Form::label('Gross Tax', trans('validation.attributes.backend.nonmls.g_tax'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::number('g_tax', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.g_tax'), 'step' => 'any']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Strata Maintenance Fee --}}
            <div class="form-group">
                {{ Form::label('Strata Maintenance Fee', trans('validation.attributes.backend.nonmls.strata_fee'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('strata_fee', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.strata_fee')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Expected Handoff --}}
            <div class="form-group">
                {{ Form::label('Expected Handoff', trans('validation.attributes.backend.nonmls.expected_handoff'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('expected_handoff', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.expected_handoff')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Avaliable Quantity --}}
            <div class="form-group">
                {{ Form::label('Avaliable Quantity', trans('validation.attributes.backend.nonmls.avaliable_quantity'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('avaliable_quantity', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.avaliable_quantity')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Is Transfer --}}
            <div class="form-group">
                {{ Form::label('Is Transfer', trans('validation.attributes.backend.nonmls.is_transfer'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-1">
                    <div class="control-group">
                        <label class="control control--checkbox">
                            {{ Form::checkbox('is_transfer', '1', false) }}
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                </div><!--col-lg-1-->
            </div><!--form control-->

            {{-- Layout --}}
            <div class="form-group">
                {{ Form::label('Layout', trans('validation.attributes.backend.nonmls.layout'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('layout', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.layout')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            {{-- Layout Diagram URL --}}
            <div class="form-group">
                {{ Form::label('Layout Diagram URL', trans('validation.attributes.backend.nonmls.layout_diagram_urls'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('layout_diagram_urls', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.nonmls.layout_diagram_urls')]) }}
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
                <a href="{{ route('admin.nonmlsproperties.index') }}" class="btn btn-danger btn-md">Cancel</a>
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
            var request = new XMLHttpRequest();
            request.open("HEAD", imgURL, false);
            request.send(null);
            var headerText = request.getAllResponseHeaders();
            var re = /Content\-Length\s*:\s*(\d+)/i;
            re.exec(headerText);
            return parseInt(RegExp.$1);
        }
    </script>
@endsection
