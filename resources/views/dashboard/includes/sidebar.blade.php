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
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard general-icon"></i>
                {{ trans('admin.main_dashboard') }}
            </a>
        </li>
        <!-- End Dashboard Link -->
        <!-- Start Main Settings Link -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-gears general-icon"></i>
                {{ trans('admin.main_settings') }}
            </a>
        </li>
        <!-- End Main Settings Link -->

        <!-- Start Admins Link -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-users general-icon"></i>
                {{ trans('admin.all_admins') }}
                <i class="fa fa-caret-left"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li><a href="{{ route('admin.create_admin_profile') }}">{{ trans('admin.add_admin') }}</a></li>
                <li><a href="{{ route('admin.all_admins') }}">{{ trans('admin.show_all_admin') }}</a></li>
            </ul>
        </li>
        <!-- End Admins Link -->

        <!-- Start Main Categories & Sub Categories Link -->

        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-list general-icon"></i>
                {{ trans('admin.all_main_category') }}
                <i class="fa fa-caret-left"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li><a href="{{ route('admin.create.mainCategories') }}">{{ trans('admin.add_main_category') }}</a></li>
                <li><a href="{{ route('admin.mainCategories') }}">{{ trans('admin.show_all_main_category') }}</a></li>
            </ul>
        </li>
        <!-- End Main Category -->
        <!-- Start Sub Category -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-list general-icon"></i>
                {{ trans('admin.all_sub_category') }}
                <i class="fa fa-caret-left"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li><a href="{{ route('admin.create_admin_profile') }}">{{ trans('admin.add_sub_category') }}</a></li>
                <li><a href="{{ route('admin.all_admins') }}">{{ trans('admin.show_all_main_category') }}</a></li>
            </ul>
        </li>
        <!-- End Sub Category -->
        <!-- End Main Categories & Sub Categories Link -->

        <!-- Start Shipping Delivery -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-truck general-icon"></i>
                {{ trans('admin.shipping_delivery') }}
                <i class="fa fa-caret-left"></i>
            </a>
            <ul class="child-links list-unstyled">
                <li><a href="{{ route('edit.shipping.methods', 'free_shipping') }}">{{ trans('admin.free_shipping') }}</a></li>
                <li><a href="{{ route('edit.shipping.methods', 'inner_shipping') }}">{{ trans('admin.locale_shipping') }}</a></li>
                <li><a href="{{ route('edit.shipping.methods', 'outer_shipping') }}">{{ trans('admin.external_shipping') }}</a></li>
            </ul>
        </li>
        <!-- End Shipping Delivery -->

        <!-- Start Main Languages Link -->
        <li>
            <a class="toggle-submenu" href="#">
                <i class="fa fa-edit general-icon"></i>
                {{ trans('admin.website_languages') }}
                <i class="fa fa-caret-left"></i>
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
    </ul>
    <!-- End Links Area-->
</div>
<!-- End Sidebar-->
