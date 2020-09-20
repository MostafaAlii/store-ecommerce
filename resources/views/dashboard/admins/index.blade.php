@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.admins_area') }}
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.all_admins') }}"> {{ trans('admin.admins_area') }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumbs -->
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Start Page Heading -->
    <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.all_admins') }}</h1>
    </div>
    <hr>
    <!-- End Page Heading -->

    <!-- Start Content Body -->
    <div class="content-body">
            {!! $dataTable->table(['class'=>'dataTable table table-striped table-responsive table-bordered table-striped', 'style'=>'width: 100%;'],true) !!}
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
                    <div class="alert alert-danger">
                        <div class="empty_record hidden">
                            <h4>{{ trans('admin.please_check_some_records') }}</h4>
                        </div>
                        <div class="not_empty_record hidden">
                            <h4>{{ trans('admin.delete_this') }}  <span class="record_count"> </span> ? </h4>
                        </div>
                    </div>
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
    @push('js')
    <script>delete_all();</script>
    {!! $dataTable->scripts() !!}
    @endpush
@endsection
