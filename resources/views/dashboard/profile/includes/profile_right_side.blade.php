<!-- Start Right Side -->
<div class="right-side">
    <!-- Start Profile Side -->
    <div class="profile_side">
        <h3>{{ trans('admin.user_connect') }}</h3>
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
                {{ auth('admin')->user()->bio_content }}
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
