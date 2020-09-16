<!-- Start Profile Header -->
<div class="profile_header">
    <!-- Start Profile Img -->
    <div class="profile_img">
        <img class="" src="{{ asset('assets/admin/img/avatar/avatar.jpg') }}" alt="" width="200">
    </div>
    <!-- End Profile Img -->

    <!-- Start Profile-nav-info -->
    <div class="profile_nav_info">
        <h3 class="user-name">{{ auth('admin')->user()->name }}</h3>
        <h6 style="font-style: italic; font-weight: bold;"> {{ auth('admin')->user()->nickname }}</h6>
        <div class="address text-center">
            <p class="states">{{ auth('admin')->user()->city }} / </p>
            <span class="country">{{ auth('admin')->user()->country }} </span>
        </div>
    </div>
    <!-- End Profile-nav-info -->
</div>
<!-- End Profile Header -->
