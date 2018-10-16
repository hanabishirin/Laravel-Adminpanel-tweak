@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.mls.management'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.mls.management') }}
    </h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.mls.active') }}</h3>

            {{--<div class="box-tools pull-right" style="display: none;">--}}
            {{--@include('backend.access.includes.partials.user-header-buttons')--}}
            {{--</div><!--box-tools pull-right-->--}}
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="mls-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.backend.mls.table.mls_number') }}</th>
                        <th>{{ trans('labels.backend.mls.table.address') }}</th>
                        <th>{{ trans('labels.backend.mls.table.city') }}</th>
                        <th>{{ trans('labels.backend.mls.table.list_date') }}</th>
                        <th>{{ trans('labels.backend.mls.table.asking_price') }}</th>
                        <th>{{ trans('labels.backend.mls.table.area_total') }}</th>
                        <th>{{ trans('labels.backend.mls.table.is_openHouse') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                    <thead class="transparent-bg">
                    <tr>
                        <th>
                            {!! Form::text('mls_number', null, ["class" => "search-input-text form-control", "data-column" => 0, "placeholder" => trans('labels.backend.mls.table.mls_number')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th>
                            {!! Form::text('address', null, ["class" => "search-input-text form-control", "data-column" => 1, "placeholder" => trans('labels.backend.mls.table.address')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th>
                            {!! Form::text('city', null, ["class" => "search-input-text form-control", "data-column" => 2, "placeholder" => trans('labels.backend.mls.table.city')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th></th>
                        <th>
                            {!! Form::text('asking_price', null, ["class" => "search-input-text form-control", "data-column" => 4, "placeholder" => trans('labels.backend.mls.table.asking_price')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <!--<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        {{-- {!! history()->renderType('User') !!} --}}
    </div><!-- /.box-body -->
    </div><!--box box-info-->
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        (function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            var dataTable = $('#mls-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.mlsproperties.get") }}',
                    type: 'post',
                    data: {status: 1, trashed: false}
                },
                columns: [

                    {data: 'id', name: '{{config('access.mls_table')}}.id'},
                    {data: 'address', name: '{{config('access.mls_table')}}.address'},
                    {data: 'city', name: '{{config('access.mls_table')}}.city'},
                    {data: 'asking_price', name: '{{config('access.mls_table')}}.asking_price'},
                    {data: 'city', name: '{{config('access.mls_table')}}.city', sortable: false},
                    {data: 'created_at', name: '{{config('access.mls_table')}}.created_at'},
                    {data: 'updated_at', name: '{{config('access.mls_table')}}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1, 2, 3, 4, 5, 6]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1, 2, 3, 4, 5, 6]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1, 2, 3, 4, 5, 6]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1, 2, 3, 4, 5, 6]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1, 2, 3, 4, 5, 6]  }}
                    ]
                }
            });

            Backend.DataTableSearch.init(dataTable);
        })();
    </script>
@endsection
