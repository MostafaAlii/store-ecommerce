@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.edit_user_profile') }}
@endsection
@section('content')
    <br>
    @include('dashboard.profile.includes.profile_header')

<!-- Start Main Body -->
<div class="main_bd">
    @include('dashboard.profile.includes.profile_right_side')
    <!-- Start Left Side -->
    <div class="left_side">
        <div class="nav-justified dynamic-tabs">
            <ul class="nav nav-tabs tabs-list">
                <li class="nav-item active">
                    <a class="nav-link active" data-target="#userSetting" data-toggle="tab" href="">{{ trans('admin.user_edit_profile_info') }}</a>
                </li>
            </ul>
            <!-- End Tabs List -->
            <!-- Start Tab Content -->
            <div class="tab-content content-list">
                <!-- Start Get Setting Section -->
                <section id="userSetting" class="get_setting tab-pane active user-setting">
                    <!-- Start Container -->
                    <div class="container">
                        @include('dashboard.includes.alerts.success')
                        @include('dashboard.includes.alerts.errors')
                        <!-- Start Setting Form -->
                        <form class="form setting-form row" action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $admin->id }}">
                            <!-- Start UserImg Field -->
                            <div class="form-field userImg form-group col-lg-6">
                                <label for="file" class="input-label">
                                    <i class="fa fa-upload upload_icon"> </i>
                                    <span id="label_span">{{ trans('admin.user_img') }}</span>
                                </label>
                                <input id="file" class="" type="file" name="user_img" multiple="true">
                            </div>
                            <div class="form-field form-group col-lg-6"></div>
                            <!-- End UserImg Field -->

                            <!-- Start Name Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="name" class="label">{{ trans('admin.user_name') }}</label>
                                <input id="name" class="input-text" value="{{ $admin->name }}" type="text" name="name">
                                @error("name")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End Name Field -->

                            <!-- Start Nickname Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="nickname" class="label">{{ trans('admin.user_nickname') }}</label>
                                <input id="nickname" value="{{ $admin->nickname }}" class="input-text" type="text" name="nickname">
                                @error("nickname")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End Nickname Field -->

                            <!-- Start Email Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="email" class="label">{{ trans('admin.user_email') }}</label>
                                <input id="email" value="{{ $admin->email }}" class="input-text" type="email" name="email">
                                @error("email")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-field form-group col-lg-6"></div>
                            <!-- End Email Field -->

                            <!-- Start Country Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="city" class="label">{{ trans('admin.user_city') }}</label>
                                <input id="city" value="{{ $admin->city }}" class="input-text" type="text" name="city">
                                @error("city")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End Country Field -->

                            <!-- Start City Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="country" class="label">{{ trans('admin.user_country') }}</label>
                                <input id="country" value="{{ $admin->country }}" class="input-text" type="text" name="country">
                                @error("country")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End City Field -->

                            <!-- Start Address Field -->
                            <div class="form-field form-group col-lg-12">
                                <label for="address" class="label">{{ trans('admin.user_address') }}</label>
                                <input id="address" value="{{ $admin->address }}" class="input-text" type="text" name="address">
                                @error("address")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End Address Field -->

                            <!-- Start Password Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="password" class="label">{{ trans('admin.user_new_password') }}</label>
                                <input id="password" class="input-text" type="password" name="password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End Password Field -->

                            <!-- Start Re-Password Field -->
                            <div class="form-field form-group col-lg-6">
                                <label for="re_password" class="label">{{ trans('admin.user_re_password') }}</label>
                                <input id="re_password" class="input-text" type="password" name="password_confirmation">
                            </div>
                            <!-- End Re-Password Field -->

                            <!-- Start Bio Text Area -->
                            <div class="form-field form-group col-lg-12 bio_section">
                                <textarea name="bio_content" class="bio-content">{{ $admin->bio_content }}</textarea>
                                @error("bio_content")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Start Bio Text Area -->

                            <!-- Start Submit Field -->
                            <div class="form-field col-lg-6 form-actions">
                                <button type="submit" class="btn btn-dark"><i class="fa fa-save"> </i> {{ trans('admin.save_action') }}</button>
                            </div>
                            <!-- End Submit Field -->
                        </form>
                        <!-- End Setting Form -->
                    </div>
                    <!-- End Container -->
            </section>
            <!-- End Get Setting Section -->
        </div>
        <!-- End Tab Content -->
    </div>
    <!-- End Dynamic Tab -->
</div>
    <!-- End Left Side -->
</div>
<!-- End Main Body -->
@endsection
