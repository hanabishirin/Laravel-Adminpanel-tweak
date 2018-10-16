@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.nonmls.management'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.nonmls.management') }}
    </h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.nonmls.active') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.includes.partials.nonmls-header-button')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="nonmls-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.backend.nonmls.table.id') }}</th>
                        <th>{{ trans('labels.backend.nonmls.table.address') }}</th>
                        <th>{{ trans('labels.backend.nonmls.table.city') }}</th>
                        <th>{{ trans('labels.backend.nonmls.table.list_date') }}</th>
                        <th>{{ trans('labels.backend.nonmls.table.asking_price') }}</th>
                        <th>{{ trans('labels.backend.nonmls.table.area_total') }}</th>
                        <th>{{ trans('labels.backend.nonmls.table.is_openHouse') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                    <thead class="transparent-bg">
                    <tr>
                        <th>
                            {!! Form::text('id', null, ["class" => "search-input-text form-control", "data-column" => 0, "placeholder" => trans('labels.backend.nonmls.table.id')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th>
                            {!! Form::text('address', null, ["class" => "search-input-text form-control", "data-column" => 1, "placeholder" => trans('labels.backend.nonmls.table.address')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th>
                            {!! Form::text('city', null, ["class" => "search-input-text form-control", "data-column" => 2, "placeholder" => trans('labels.backend.nonmls.table.city')]) !!}
                            <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </th>
                        <th></th>
                        <th>
                            {!! Form::text('asking_price', null, ["class" => "search-input-text form-control", "data-column" => 4, "placeholder" => trans('labels.backend.nonmls.table.asking_price')]) !!}
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


            var dataTable = $('#nonmls-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.nonmls.get") }}',
                    type: 'post',
                    data: {status: 1, trashed: false}
                },
                columns: [

                    {data: 'id', name: '{{config('access.nonmls_table')}}.id'},
                    {data: 'address', name: '{{config('access.nonmls_table')}}.address'},
                    {data: 'city', name: '{{config('access.nonmls_table')}}.city'},
                    {data: 'list_date', name: '{{config('access.nonmls_table')}}.list_date'},
                    {data: 'asking_price', name: '{{config('access.nonmls_table')}}.asking_price', sortable: false},
                    {data: 'area_total', name: '{{config('access.nonmls_table')}}.area_total'},
                    {data: 'is_openHouse', name: '{{config('access.nonmls_table')}}.is_openHouse'},
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
