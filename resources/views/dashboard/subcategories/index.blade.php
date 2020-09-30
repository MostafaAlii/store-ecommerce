@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.subcategories_area') }}
@endsection

@section('content')
    <!-- Start Content Header -->
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <!-- Start Breadcrumbs -->
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('admin.main_dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.mainCategories') }}"> {{ trans('admin.categories_area') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.subCategories') }}"> {{ trans('admin.subcategories_area') }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumbs -->
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Start Page Heading -->
    <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.all_sub_category') }}</h1>
    </div>
    <hr>
    <!-- End Page Heading -->
    @include('dashboard.includes.alerts.success')
    @include('dashboard.includes.alerts.errors')

    <!-- Start Content Body -->
    <div class="content-body">
        <!-- Start DataTable -->
        <div id="categorydatatable-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div></div>
            <!-- Start Datatable Buttton -->
            <div class="dt-buttons">
                <button class="dt-button btn btn-outline-info" tabindex="0" aria-controls="categorydatatable-table" type="button">
                    <span><i class="fa fa-file"> </i> {{ trans('admin.export_csv') }}</span>
                </button>
                <button class="dt-button btn btn-outline-success" tabindex="0" aria-controls="categorydatatable-table" type="button">
                    <span><i class="fa fa-file"> </i> {{ trans('admin.export_excel_sheet') }}</span>
                </button>
                <button class="dt-button btn btn-outline-dark" tabindex="0" aria-controls="categorydatatable-table" type="button">
                    <span><i class="fa fa-print"> </i> {{ trans('admin.print') }}</span>
                </button>
                <button class="dt-button btn btn-outline-warning" tabindex="0" aria-controls="categorydatatable-table" type="button">
                    <span><i class="fa fa-refresh"> </i></span>
                </button>
                <button id="delBtn" class="dt-button btn btn-danger delBtn" tabindex="0" aria-controls="categorydatatable-table" type="button">
                    <span><i class="fa fa-trash"> </i> {{ trans('admin.delete_all') }}</span>
                </button>
                <a href="{{ route('admin.create.subCategories') }}" class="dt-button btn btn-primary" tabindex="0" aria-controls="categorydatatable-table" type="button">
                    <span><i class="fa fa-plus"> </i> {{ trans('admin.add_new_subcategory') }}</span>
                </a>
            </div>
            <!-- End Datatable Buttton -->

            <!-- Start Datatable Lenght -->
            <div class="hidden" id="">
                <label>
                </label>
            </div>
            <!-- End Datatable Lenght -->

            <!-- Start Processing -->
            <div id="categorydatatable-table_processing" class="dataTables_processing card" style="display: none;">{{ trans('admin.sProcessing') }}</div>
            <!-- End Processing -->

            

            <!-- Start Table -->
            <table id="categorydatatable-table" class="table table-striped table-responsive table-bordered table-striped" style="width: 100%;" role="grid" aria-describedby="categorydatatable-table_info" true>
                <thead>
                    <tr role="row">
                        <th class="" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 13px;" aria-label="">
                            <input name="checkbox" type="checkbox" class="item_checkbox" id="checkboxAll">
                        </th>
                        <th class="" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 37px;" aria-label="{{ trans('admin.table_field_id_number') }}">
                            {{ trans('admin.table_field_id_number') }}
                        </th>
                        <!-- Category Name -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 156px;" aria-label="{{ trans('admin.category_name') }}">
                            {{ trans('admin.category_name') }}
                        </th>
                        <!-- Category Link_Name -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 241px;" aria-label="{{ trans('admin.category_link_name') }}">
                            {{ trans('admin.category_link_name') }}
                        </th>
                        <!-- Category Lang -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 38px;" aria-label="{{ trans('admin.lang') }}">
                            {{ trans('admin.lang') }}
                        </th>
                        <!-- Category Img -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 55px;" aria-label="{{ trans('admin.category_image') }}">
                            {{ trans('admin.category_image') }}
                        </th>
                        <!-- Category Status -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 51px;" aria-label="{{ trans('admin.category_status') }}">
                            {{ trans('admin.category_status') }}
                        </th>
                        <!-- created_at -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 143px;" aria-label="{{ trans('admin.created_at') }}">
                            {{ trans('admin.created_at') }}
                        </th>
                        <!-- updated_at -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 143px;" aria-label="{{ trans('admin.updated_at') }}">
                            {{ trans('admin.updated_at') }}
                        </th>
                        <!-- Edit Btn -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 36px;" aria-label="{{ trans('admin.edit') }}">
                            {{ trans('admin.edit') }}
                        </th>
                        <!-- Delete Btn -->
                        <th class="sorting" tabindex="0" aria-controls="categorydatatable-table" rowspan="1" colspan="1" style="width: 36px;" aria-label="{{ trans('admin.delete') }}">
                            {{ trans('admin.delete') }}
                        </th>
                    </tr>
                </thead>
                <tfoot></tfoot>
                <tbody>
                    @isset($categories)
                        @foreach ($categories as $category)
                            <tr role="row">
                                <td><input type="checkbox" name="ids" class="checkboxClass" value="{{ $category->id }}"></td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td><!-- Category Lang --></td>
                                <td><img style="width:150px; height:80px;border-radius: 5px;" src=""></td>
                                <td>{{ $category->getStatus() }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td><a href="{{ route('admin.edit.subCategories', $category->id) }}" class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1"><i class="fa fa-edit"> </i></a></td>
                                <td><a href="{{ route('admin.delete.subCategories', $category->id) }}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"><i class="fa fa-trash"> </i></a></td>                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
            <!-- End Table -->
        </div>
        <!-- End DataTable -->
    </div>
    <!-- End Content Body -->

    <!-- Start Admin Delete Modal -->
    <div id="multipleDelete" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ trans('admin.delete_record') }}</h5>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <div class="not_empty_record hidden">
                        <input type="submit" value="{{ trans('admin.delete_action') }}" name="del_all"  class="btn btn-outline-danger del_all">
                    </div>
                    <div class="empty_record hidden">
                        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">{{ trans('admin.cancel_action') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Admin Delete Modal -->
    
        <script>
            $('#categorydatatable-table').dataTable({
                paging :true,
                responsive: true,
                processing: true,
                //orderBy: [[1, 'desc']],
                minifiedAjax:true,
                bProcessing:true,
                lengthChange: true,
                autoWidth: false,
                info: true,
                searching:true,
                ordering:true,
                lengthMenu: [[5, 10, 25, 100,-1], [5, 10, 25, 50, 'كل السجلات']],
                language: {
                    "lengthMenu": "اظهار_MENU_سجل",
                    "paginate":{
                        "sFirst"                    : "الاول",
                        "sLast"                     : "الاخير",
                        "sNext"                     : "التالى",
                        "sPrevious"                 : "السابق",

                    },
                    "sSearch"                      : " بحث",
                    'sProcessing'                  : 'تحميل',
                    'sZeroRecords'                 : 'صفر سجل',
                    'sEmptyTable'                  : 'جدول خالى',
                    'sInfo'                        : 'اظهار _START_ الى  _END_ من _TOTAL_ سجل',
                    'sInfoEmpty'                   : 'معلومات خالية',
                    'sInfoFiltered'                : 'معلومات منتقاه',
                    'sLoadingRecords'              : 'تحميل السجلات',
                    'sSortAscending'               : 'ترتيب بحسب الاقدم',
                    'sSortDescending'              : 'ترتيب بحسب الاحدث',
                    'sInfoPostFix'                 : '',
                    'sUrl'                         : '',
                    'sInfoThousands'               : '',
                },
            });
        </script>
@endsection