@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.mls.management') . ' | ' . trans('labels.backend.mls.view'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.mls.management') }}
        <small>{{ trans('labels.backend.mls.view') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.mls.view') }}</h3>

            {{--<div class="box-tools pull-right">--}}
                {{--@include('backend.access.includes.partials.user-header-buttons')--}}
            {{--</div><!--box-tools pull-right-->--}}
        </div><!-- /.box-header -->

        <div class="box-body">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">{{ trans('labels.backend.mls.tabs.titles.overview') }}</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane mt-30 active" id="overview">
                        @include('backend.show.tabs.mls_overview')
                    </div><!--tab overview profile-->

                </div><!--tab content-->

            </div><!--tab panel-->

        </div><!-- /.box-body -->
    </div><!--box-->
@endsection