@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.shipping_delivery') }}
@endsection

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <!-- Start Breadcrumbs -->
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('admin.main_dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="#"> {{ trans('admin.shipping_delivery') }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumbs -->
        </div>
    </div>

    <div class="content-body">
        <!-- Start Basic Form -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 mt-4 justify-content-center">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="card-title">{{ trans('admin.edit_shipping_methods') }}</h4>
                        </div>
                        <br>
                        @include('dashboard.includes.alerts.success')
                        @include('dashboard.includes.alerts.errors')
                        <div class="card-body">
                            <form class="form" action="{{ route('update.shipping.methods', $shippingMethod->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $shippingMethod->id }}">
                                <!-- Start Form Body -->
                                <div class="form-body">
                                    <!-- Start Shipping Methods Name and Value -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Start Shipping Method Name -->
                                            <div class="form-group">
                                                <label for="projectinput1">{{ trans('admin.shipping_methods_name') }}</label>
                                                <input class="form-control" type="text" value="{{ $shippingMethod->value }}" id="name" name="value" placeholder="">
                                                @error("value")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- End Shipping Method Name -->
                                            <!-- Start Shipping Method Value -->
                                            <div class="form-group">
                                                <label for="projectinput1">{{ trans('admin.shipping_methods_value') }}</label>
                                                <input class="form-control" type="number" value="{{ $shippingMethod->plain_value }}" id="plain_value" name="plain_value" placeholder="">
                                                @error("plain_value")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- End Shipping Method Value -->
                                        </div>
                                    </div>
                                    <!-- End Shipping Methods Name and Value -->

                                <!-- Start Status --
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1">
                                                <input type="checkbox" id="statusSwitcher" name="active" data-color="success" checked>
                                                <label for="statusSwitcher" class="card-title ml-1">{{-- trans('admin.table_field_status') }}</label>
                                                @error("active")
                                                    <span class="text-danger">{{ $messages }}</span>
                                                @enderror--}}
                                    </div>
                                </div>
                            </div>
                            -- End Status -->
                                    <hr>
                                    <!-- Start Form Actions -->
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-dark"><i class="fa fa-save"> </i> {{ trans('admin.save_action') }}</button>
                                        <button type="button" class="btn btn-warning mr-1" onclick="history.back();"><i class="fa fa-close"></i> {{ trans('admin.cancel_action') }}</button>
                                    </div>
                                    <!-- End Form Actions -->
                                </div>
                                <!-- End Form Body -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Basic Form -->
    </div>
    <!-- End Content body -->

@endsection
