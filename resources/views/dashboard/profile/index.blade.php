@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.user_profile') }}
@endsection
@section('content')
    <br>
    <!-- Start Profile Header -->
    <div class="profile_header">
        <!-- Start Profile Img -->
        <div class="profile_img">
            <img class="" src="{{asset('assets/admin/img/avatar/avatar.jpg')}}" alt="" width="200">
        </div>
        <!-- End Profile Img -->

        <!-- Start Profile-nav-info -->
        <div class="profile_nav_info">
            <h3 class="user-name">{{ auth('admin')->user()->name }}</h3>
            <div class="address">
                <p class="states">{{ auth('admin')->user()->city }} / </p>
                <span class="country"> Egy </span>
            </div>
        </div>
        <!-- End Profile-nav-info -->
    </div>
    <!-- End Profile Header -->

    <!-- Start Main Body -->
    <div class="main_bd">
        <!-- Start Right Side -->
        <div class="right-side">
            <!-- Start Profile Side -->
            <div class="profile_side">
                <h3>{{ trans('admin.user_connect') }}</h3>
                <p class="mobile-no">
                    <i class="fa fa-phone"> </i>
                    {{ auth('admin')->user()->phone }} -02+
                </p>
                <!-- Start User Mail -->
                <p class="user-mail">
                    <i class="fa fa-envelope"> </i>
                    {{ auth('admin')->user()->email }}
                </p>
                <!-- End User Mail -->

                <!-- Start User Bio -->
                <div class="user_bio">
                    <h3>{{ trans('admin.user_bio') }}</h3>
                    <p class="bio">
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci velit,
                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci velit,
                    </p>
                </div>
                <!-- End User Bio -->

                <!-- Start Profile btn -->
                <div class="profile_btn">
                    <button class="chatbtn">
                        <i class="fa fa-comment"></i>
                        {{ trans('admin.user_chat') }}
                    </button>
                    <button class="createbtn">
                        <i class="fa fa-plus"></i>
                        {{ trans('admin.add_admin_user') }}
                    </button>
                </div>
                <!-- End Profile btn -->

                <!-- Start Profile Rating -->
                <div class="user_rating">
                    <h3 class="rating">4.5</h3>
                    <div class="rate">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span class="no_user">
                            <span>123</span>
                            &nbsp;&nbsp;
                            {{ trans('admin.review') }}
                        </span>
                    </div>
                </div>
                <!-- End Profile Rating -->
            </div>
            <!-- End Profile Side -->
        </div>
        <!-- End Right Side -->

        <!-- Start Left Side --
        <div class="left_side">
            !-- Start Tabs --
            <div id="left_side_nav" class="nav profileLeftNavs dynamic_tabs">
                <ul class="profileLeftTabs tabs-list">
                    <li data-content=".profile-products"  class="user-post active"><a href="">{{-- trans('admin.user_products') }}</a></li>
                    <li data-content=".profile-settings" class="user-review"><a href="">{{ trans('admin.user_setting') }}</a></li>
                    <li data-content=".profile-permissions" class="user-setting"><a href="">{{ trans('admin.user_permission') --}}</a></li>
                </ul>
            </div>
            -- End Tabs -->

            <!-- Start Profile body --
            <div class="profile_body content-list">
                <div class="profile-products tab"><h1>Your Products</h1></div>
                <div class="profile-settings tab"><h1>Your Account Settings</h1></div>
                <div class="profile-permissions tab"><h1>Your User Permission</h1></div>
            </div>
            -- End Profile body --
        </div>
        -- End Left Side -->
        <div class="left_side">
            <div class="nav-justified dynamic-tabs">
                <ul class="nav nav-tabs tabs-list">
                    <li class="nav-item">
                        <a class="nav-link" data-target="#userProducts" data-toggle="tab" href="">{{ trans('admin.user_products') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-target="#userSetting" data-toggle="tab" href="">{{ trans('admin.user_setting') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-target="#userPermission" data-toggle="tab" href="">{{ trans('admin.user_permission') }}</a>
                    </li>
                </ul>
                <!-- End Tabs List -->
                <!-- Start Tab Content -->
                <div class="tab-content content-list">
                    @include('dashboard.profile.user_products')
                    @include('dashboard.profile.user_setting')
                    @include('dashboard.profile.user_permission')
                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Dynamic Tab -->
        </div>

    </div>
    <!-- End Main Body -->
@endsection
