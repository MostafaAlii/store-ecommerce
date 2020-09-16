<!-- Start User Setting -->
<div id="userSetting" class="tab-pane user_setting fade">
    <!-- Start Page Heading -->
    <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ trans('admin.user_info') }}</h1>
        <a href="{{ route('edit.profile') }}" class="btn btn-dark">
            <i class="fa fa-edit"> </i>
             {{ trans('admin.user_edit_profile_info_click') }}
        </a>
    </div>
    <hr>
@include('dashboard.includes.alerts.success')
@include('dashboard.includes.alerts.errors')
<!-- End Page Heading -->
