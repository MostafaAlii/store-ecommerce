<div class="left_side">
    <div class="nav-justified dynamic-tabs">
        <ul class="nav nav-tabs tabs-list">
            <li class="nav-item">
                <a class="nav-link" data-target="#userProducts" data-toggle="tab" href="">{{ trans('admin.user_products') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-target="#userSetting" data-toggle="tab" href="">{{ trans('admin.user_info') }}</a>
            </li>
        </ul>
        <!-- End Tabs List -->
        <!-- Start Tab Content -->
        <div class="tab-content content-list">
            @include('dashboard.profile.includes.pages.user_products')
            @include('dashboard.profile.includes.pages.user_settings')
        </div>
        <!-- End Tab Content -->
    </div>
    <!-- End Dynamic Tab -->
</div>
