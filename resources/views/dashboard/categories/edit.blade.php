@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.category_edit') }}
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
                    <li class="breadcrumb-item"><a href="{{ route('admin.mainCategories') }}">{{ trans('admin.categories_area') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.edit.mainCategories', $category->id) }}">{{ trans('admin.category_edit_details') }}</a></li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->
    </div>
</div>
<!-- End Content Header -->

<!-- Start Page Heading -->
<div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.category_edit_details') }}</h1>
</div>
<hr>
<!-- End Page Heading -->

<!-- Start Content Body -->
<div class="content-body">
    @include('dashboard.includes.alerts.success')
    @include('dashboard.includes.alerts.errors')
    <div class="card-content collapse show">
        <div class="card-body">
            <form class="form setting-form row" action="{{ route('admin.update.mainCategories', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">
            <!-- Start CategoryImg Field -->
            <div class="form-field userImg form-group col-lg-6">
                <label for="file" class="input-label">
                    <i class="fa fa-upload upload_icon"> </i>
                    <span id="label_span">{{ trans('admin.category_img') }}</span>
                </label>
                <input id="file" class="" type="file" name="photo" multiple="true">
            </div>
            <div class="form-field form-group col-lg-6"></div>
            @error('photo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <!-- End CategoryImg Field -->

            <!-- Start Category Name Field -->
            <div class="form-field form-group col-lg-4">
                <label for="name" class="label">{{ trans('admin.category_name') }}</label>
                <input id="name" class="input-text" value="{{ $category->name }}" type="text" name="name">
                @error("name")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field form-group col-lg-4"></div>
            <div class="form-field form-group col-lg-4"></div>
            <!-- End Category Name Field -->

            <!-- Start Category Slug Name Field -->
            <div class="form-field form-group col-lg-4">
                <label for="slug" class="label">{{ trans('admin.category_slug') }}</label>
                <input id="slug" class="input-text" value="{{ $category->slug }}" type="text" name="slug">
                @error("slug")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field form-group col-lg-4"></div>
            <div class="form-field form-group col-lg-4"></div>
            <!-- End Category Slug Name Field -->

            <!-- Start Category Status Field -->
            <div class="form-field form-group col-lg-12">
                <label for="switcheryColor4" class="label">{{ trans('admin.category_status') }}</label>
                <input type="checkbox" name="is_active" id="switcheryColor4" value="1" data-color="success" class="js-switch" @if($category->is_active == 1) checked @endif>
                @error("is_active")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- End Category Status Field -->
            <!-- Start Submit Field -->
            <div class="form-field col-lg-6 form-actions">
                <button type="submit" class="btn btn-dark"><i class="fa fa-save"> </i> {{ trans('admin.update_action') }}</button>
                <button type="button" onclick="history.back();" class="btn btn-warning">{{ trans('admin.cancel_action') }}</button>
            </div>
            <!-- End Submit Field -->
            </form>
        </div>
    </div>
</div>
<!-- Start Content Body -->
@push('js')
    <script type="text/javascript">
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem,{
        color             : '#64bd63'
        , secondaryColor    : '#ccc'
        , jackColor         : '#fff'
        , jackSecondaryColor: null
        , className         : 'switchery'
        , disabled          : false
        , disabledOpacity   : 0.5
        , speed             : '1s'
        , size              : 'small'
        });
    </script>
@endpush
@endsection