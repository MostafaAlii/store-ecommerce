@extends('layouts.admin')
@section('page_title')
    {{ trans('admin.user_profile') }}
@endsection
@section('content')
    <br>
    @include('dashboard.profile.includes.profile_header')

    <!-- Start Main Body -->
    <div class="main_bd">
        @include('dashboard.profile.includes.profile_right_side')
        @include('dashboard.profile.includes.profile_left_side')
    </div>
    <!-- End Main Body -->
@endsection
