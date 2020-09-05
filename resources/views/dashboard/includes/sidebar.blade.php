<!-- Start Sidebar-->
<div class="sidebar">
    <!-- Start Logo Area-->
    <div class="logo-area text-center"><img class="logo" src="{{ asset('assets/admin/img/logo/techno.png') }}" alt=""/>
        <p class="logoText">{{ trans('admin.application_name') }}</p>
    </div>
    <!-- End Logo Area-->
    <!-- Start Plugin Bar-->
    <div class="plugin-btn-bar">
        <li class="list-unstyled text-lg-center">
            <button class="btn-success"> <i class="fa fa-calculator"></i></button>
            <button class="refresh-btn btn-dark"> <i class="fa fa-refresh"></i></button>
            <button class="btn-warning"> <i class="fa fa-camera"></i></button>
        </li>
    </div>
    <!-- End Plugin Bar-->
    <!-- Start Links Area-->
    <ul class="links-area list-unstyled">
        <!-- Start Dashboard Link -->
        <li class="active">
            <a href="#">
                {{ trans('admin.main_dashboard') }}
                <i class="fa fa-dashboard general-icon"></i>
            </a>
        </li>
        <!-- End Dashboard Link -->
        <!-- Start Main Settings Link -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-caret-left"></i>
                {{ trans('admin.main_settings') }}
                <i class="fa fa-gears general-icon"></i>
            </a>
        </li>
        <!-- End Main Settings Link -->

        <!-- Start Shipping Delivery -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-caret-left"></i>
                {{ trans('admin.shipping_delivery') }}
                <i class="fa fa-truck general-icon"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li><a href="#">{{ trans('admin.free_shipping') }}</a></li>
                <li><a href="#">{{ trans('admin.locale_shipping') }}</a></li>
                <li><a href="#">{{ trans('admin.external_shipping') }}</a></li>
            </ul>
        </li>
        <!-- End Shipping Delivery -->

        <!-- Start Main Languages Link -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-caret-left"></i>
                {{ trans('admin.website_languages') }}
                <i class="fa fa-edit general-icon"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li>
                    <a href="#">
                        {{ trans('admin.add_new_language') }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        {{ trans('admin.show_all_language') }}
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Main Languages Link -->

        <!-- Start Main Categories Link -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-caret-left"></i>
                {{ trans('admin.all_website_categories') }}
                <i class="fa fa-edit general-icon"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li>
                    <a href="#">
                        {{ trans('admin.add_new_category') }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        {{ trans('admin.show_all_categories') }}
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Main Categories Link -->
    </ul>
    <!-- End Links Area-->
</div>
<!-- End Sidebar-->
