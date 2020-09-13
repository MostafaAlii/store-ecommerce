<div id="userSetting" class="tab-pane user_setting fade">
    <!-- Start Page Heading -->
    <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.user_setting') }}</h1>
    </div>
    <hr>
    @include('dashboard.includes.alerts.success')
    @include('dashboard.includes.alerts.errors')
    <!-- End Page Heading -->

    <!-- Start Get Setting Section -->
    <section class="get_setting">
        <!-- Start Container -->
        <div class="container">
            <!-- Start Setting Form -->
            <form class="form setting-form row" action="" method="" enctype="multipart/form-data">
                @csrf
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
                    <input id="name" class="input-text" type="text" name="name">
                </div>
                <!-- End Name Field -->

                <!-- Start Nickname Field -->
                <div class="form-field form-group col-lg-6">
                    <label for="nickname" class="label">{{ trans('admin.user_nickname') }}</label>
                    <input id="nickname" class="input-text" type="text" name="nickname">
                </div>
                <!-- End Nickname Field -->

                <!-- Start Email Field -->
                <div class="form-field form-group col-lg-6">
                    <label for="email" class="label">{{ trans('admin.user_email') }}</label>
                    <input id="email" class="input-text" type="email" name="email">
                </div>
                <!-- End Email Field -->

                <!-- Start Phone Field -->
                <div class="form-field form-group col-lg-6">
                    <label for="phone" class="label">{{ trans('admin.user_phone') }}</label>
                    <input id="phone" class="input-text" type="text" name="phone">
                </div>
                <!-- End Phone Field -->

                <!-- Start Address Field -->
                <div class="form-field form-group col-lg-12">
                    <label for="address" class="label">{{ trans('admin.user_address') }}</label>
                    <input id="address" class="input-text" type="text" name="address">
                </div>
                <!-- End Address Field -->

                <!-- Start Password Field -->
                <div class="form-field form-group col-lg-6">
                    <label for="password" class="label">{{ trans('admin.user_password') }}</label>
                    <input id="password" class="input-text" type="password" name="phone">
                </div>
                <!-- End Password Field -->

                <!-- Start Re-Password Field -->
                <div class="form-field form-group col-lg-6">
                    <label for="re_password" class="label">{{ trans('admin.user_re_password') }}</label>
                    <input id="re_password" class="input-text" type="password" name="phone">
                </div>
                <!-- End Re-Password Field -->
                <!-- Start Bio Text Area -->
                <div class="form-field form-group col-lg-12 bio_section">
                    <textarea name="bio_content" class="bio-content"></textarea>
                </div>
                <!-- Start Bio Text Area -->

                <!-- Start Submit Field -->
                <div class="form-field col-lg-6 form-actions">
                    <button type="submit" class="btn btn-dark"><i class="fa fa-save"> </i> {{ trans('admin.save_action') }}</button>
                    <button type="button" class="btn btn-warning mr-1" onclick="history.back();"><i class="fa fa-close"></i> {{ trans('admin.cancel_action') }}</button>
                </div>
                <!-- End Submit Field -->
            </form>
                <!-- End Form Fields -->
            <!-- End Setting Form -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End Get Setting Section -->
</div>
