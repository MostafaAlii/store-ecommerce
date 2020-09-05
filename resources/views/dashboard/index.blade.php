@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.dashboard_page') }}
@endsection
@section('content')
    <!-- Start Page Heading -->
    <br>
    <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
        <a class="d-none d-sm-inline-block btn btn-dark shadow-sm" href="">
            <i class="fa fa-download fa-sm text-white-50"></i>
            {{ trans('admin.generate_reports') }}
        </a>
        <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.dashboard_page') }}</h1>
    </div>
    <!-- End Page Heading -->

    <!-- Start Rows Content -->
    <div class="row card_boxes">
        <!-- Start Total Sales Card -->
        <div class="col-xl-3 col-md-6 mb-4 sales_card">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 sales_info">
                            <div class="text-xs font-weight-bold text-primary text-uppercase">{{ trans('admin.total_sales') }}</div>
                            <div class="h5 mb-0 font-weight-bold">$40.000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-money fa-2x card_icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Total Sales Card -->

        <!-- Start Total Requests Card -->
        <div class="col-xl-3 col-md-6 mb-4 requests_card">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 requests_info">
                            <div class="text-xs font-weight-bold text-success text-uppercase">{{ trans('admin.total_requests') }}</div>
                            <div class="h5 mb-0 font-weight-bold">$40.000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-dollar fa-2x card_icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Total Requests Card -->

        <!-- Start Suppliers Card -->
        <div class="col-xl-3 col-md-6 mb-4 supplier_card">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 supplier_info">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase">{{ trans('admin.total_suppliers') }}</div>
                            <div class="h5 mb-0 font-weight-bold">
                                <span class="pull-left"><small>{{ trans('admin.supplier') }}</small></span>
                                10000
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x card_icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Suppliers Card -->

        <!-- Start Total Product Card -->
        <div class="col-xl-3 col-md-6 mb-4 product_card">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 product_info">
                            <div class="text-xs font-weight-bold text-danger text-uppercase">{{ trans('admin.total_products') }}</div>
                            <div class="h5 mb-0 font-weight-bold">
                                <span class="pull-left"><small>{{ trans('admin.product') }}</small></span>
                                7000
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-star-half-o fa-2x card_icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Total Sales Card -->
    </div>
    <!-- End Rows Content -->
@endsection
