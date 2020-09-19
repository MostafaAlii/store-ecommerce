@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.add_new_admin') }}
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.all_admins') }}"> {{ trans('admin.add_new_admin') }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumbs -->
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Start Page Heading -->
    <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.add_new_admin') }}</h1>
    </div>
    <hr>
    <!-- End Page Heading -->

    <!-- Start Content Body -->
    <div class="content-body">
        <!-- Start Get Setting Section -->
        <section id="" class="get_setting user-setting">
            <!-- Start Container -->
            <div class="container">
                @include('dashboard.includes.alerts.success')
                @include('dashboard.includes.alerts.errors')
                {!! Form::open(['route' => 'new.admin.profile.store','files' => true, 'class'=>'form setting-form row']) !!}
                    <!-- Start name Field -->
                    <div class="form-field form-group col-lg-6">
                        {!! Form::label('name', trans('admin.user_name'), ['class' => 'label']) !!}
                        {!! Form::text('name', old('name') , ['class' => 'form-control input-text']) !!}
                        @error("name")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End name Field -->

                    <!-- Start email Field -->
                    <div class="form-field form-group col-lg-6">
                        {!! Form::label('email', trans('admin.user_email'), ['class' => 'label']) !!}
                        {!! Form::email('email', old('email') , ['class' => 'form-control input-text']) !!}
                    </div>
                    @error("email")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- End email Field -->

                    <!-- Start Password Field -->
                    <div class="form-field form-group col-lg-6">
                        {!! Form::label('password', trans('admin.user_password'), ['class' => 'label']) !!}
                        {!! Form::password('password', ['class' => 'form-control input-text']) !!}
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-field form-group col-lg-6"></div>
                    <!-- End Password Field -->

                    <!-- Start Submit Field -->
                    <div class="form-field col-lg-4 form-actions">
                        {!! Form::submit(trans('admin.add_new_admin'), ['class' => 'btn btn-dark']) !!}
                    </div>
                    <!-- End Submit Field -->
                {!! Form::close() !!}
            </div>
        </section>
    </div>
    <!-- End Content Body -->

@endsection
