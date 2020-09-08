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
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="card-title pull-right">{{ trans('admin.edit_shipping_methods') }}</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" action="{{ route('update.shipping.methods', $shippingMethod->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $shippingMethod->id }}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">{{ trans('admin.shipping_methods_name') }}</label>
                                                <input class="form-control" type="text" value="{{ $shippingMethod->value }}" id="name" name="name" placeholder="">
                                                @error("")
                                                    <span class="text-danger">{{ $messages }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
