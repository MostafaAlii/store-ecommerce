<!-- Start Header and Notification btn-->
<div class="header">
    <!-- Toggle Sidebar Icon-->
    <i class="fa fa-exchange fa-lg toggle-sidebar"></i>

    <!-- Start Notifications Icon Dropdown Menu-->
    <div class="dropdown notifications-container">
        <i class="fa fa-bell fa-lg header-icon toggle-notifications" id="notifications-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu notification-menu" aria-labelledby="notifications-btn">
            <!-- Start Notification Content-->
            <div class="notify-head">
                {{ trans('admin.notifications') }}
                <span>50</span>
            </div>
            <div class="notify-content">
                <ul class="list-unstyled">
                    <li><i class="fa fa-envelope-o fa-lg"></i>لديك رسالة من ...</li>
                    <li><i class="fa fa-money fa-lg"></i>لديك نقود من ...</li>
                    <li><i class="fa fa-envelope-o fa-lg"></i>لديك رسالة من ...</li>
                    <li><i class="fa fa-thumbs-o-up fa-lg"></i>لديك رسالة من ...</li>
                    <li><i class="fa fa-envelope-o fa-lg"></i>لديك رسالة من ...</li>
                </ul>
            </div>
            <div class="notify-foot text-center"><a href="#">{{ trans('admin.show_all_notifications') }}</a></div>
            <!-- End Notification Content-->
        </div>
    </div>
    <!-- End Notifications Icon Dropdown Menu-->

    <!-- Start Languages Icon Dropdown Menu-->
    <!--<i class="fa fa-globe" aria-hidden="true"></i>-->
    <!-- End Languages Icon Dropdown Menu-->

    <!-- FullScreen Icon-->
    <i class="fa fa-expand fa-lg toggle-fullscreen header-icon"></i>

    <!-- Start User Info Dropdown Menu -->
    <div class="dropdown userInfoMenu-container">
        <div class="username" id="userInfoMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="avatar rounded-circle" src="{{asset('assets/admin/img/avatar/avatar.jpg')}}" alt="صورة المستخدم"/><span class="user">{{ auth('admin')->user()->name }}</span><i class="fa fa-angle-down fa-lg user-angle-icon"></i></div>
        <div class="dropdown-menu userDropdownMenu dropdown-menu-left" aria-labelledby="userInfoMenu">
            <!-- Start UserInfo -->
            <div class="userInfo">
                <h3>{{ auth('admin')->user()->name }}</h3>
                <p>مدير التطبيق</p>
            </div>
            <!-- End UserInfo -->
            <!-- Start User Activities List -->
            <div class="user-activities-list">
                <!-- Start Activities List -->
                <div class="activities-list list-unstyled">
                    <!-- Start User Info Box -->
                    <div class="user-email-info">
                        <small class="user-email text-muted">{{ trans('admin.table_field_email') }}</small>
                        <h6 class="user-emailaddress">{{ auth('admin')->user()->email }}</h6>
                    </div>

                    <div class="user-phone-info">
                        <small class="user-phone text-muted">{{ trans('admin.table_field_phone') }}</small>
                        <h6 class="user-phone-number">{{ auth('admin')->user()->phone }} -02+</h6>
                    </div>

                    <div class="user-address-info">
                        <small class="user-address text-muted">{{ trans('admin.table_field_address') }}</small>
                        <h6 class="user-fully-address">{{ auth('admin')->user()->address }}</h6>
                    </div>

                    <div class="user-social-link">
                        <small class="user-social-text text-muted">{{ trans('admin.social_links') }}</small>
                    </div>
                    <!-- End User Info Box -->

                    <!-- Start Social Link bar -->
                    <div class="social-link-bar text-left">
                        <!-- Facebook-->
                        <a class="btn btn-circle btn-secondary" href="">
                            <i class="fa fa-facebook fa-lg fa-fw facebook-icon"></i>
                        </a>
                        <!-- Youtube-->
                        <a class="btn btn-circle btn-secondary" href="">
                            <i class="fa fa-youtube fa-lg fa-fw youtube-icon"></i>
                        </a>
                        <!-- LinkedIn-->
                        <a class="btn btn-circle btn-secondary" href="">
                            <i class="fa fa-linkedin fa-lg fa-fw linkedIn-icon"></i>
                        </a>
                        <!-- Google Plus-->
                        <a class="btn btn-circle btn-secondary" href="">
                            <i class="fa fa-google-plus fa-lg fa-fw googlePlus-icon"></i>
                        </a>
                    </div>
                    <!-- End Social Link bar -->
                </div>
                <!-- End Activities List -->
            </div>
            <!-- End User Activities List -->
            <hr/>
            <!-- Start UserLinks -->
            <div class="row userLinks">
                <!-- Settings Link -->
                <div class="col">
                    <div class="link-box">
                        <a href="#">
                            <i class="fa fa-gears fa-lg fa-fw user-linkBox-icon setting-icon"></i>
                            <span class="text-center">{{ trans('admin.settings') }}</span>
                        </a>
                    </div>
                </div>
                <!-- Profile Link -->
                <div class="col">
                    <div class="link-box">
                        <a href="{{ route('show.user.profile') }}">
                            <i class="fa fa-user fa-lg fa-fw user-linkBox-icon profile-icon"></i>
                            <span class="text-center">{{ trans('admin.profile') }}</span>
                        </a>
                    </div>
                </div>
                <!-- logout Link -->
                <div class="col">
                    <div class="link-box">
                        <a href="{{ route('admin.logout') }}">
                            <i class="fa fa-power-off fa-lg fa-fw user-linkBox-icon logout-icon"></i>
                            <span class="text-center">{{ trans('admin.logout') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End UserLinks -->
        </div>
    </div>
    <!-- End User Info Dropdown Menu -->
</div>
<!-- End Header and Notification btn-->
