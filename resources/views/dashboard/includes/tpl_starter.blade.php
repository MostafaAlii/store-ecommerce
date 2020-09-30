<!DOCTYPE html>
<html lang="en" data-textdirection="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ trans('admin.dashboard') }} | @yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/forms/extended/form-extended.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/forms/selectBoxIt/selectBoxIt.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/forms/selectivity/selectivity.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/forms/selectize/selectize.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/switchery/switchery.min.css') }}"/>
    
    <link rel="stylesheet" href="{{ asset('assets/admin/css/' .getMainStyleCssFile(). '.css') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&amp;family=Open+Sans&amp;display=swap"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"/>
    <script src="{{ asset('assets/admin/js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!--<link rel="stylesheet" href=""/>-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/buttons.bootstrap4.css') }}"/>

    <script src="{{ asset('assets/admin/js/jquery.dataTables.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/admin/js/dataTables.bootstrap4.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/admin/js/dataTables.buttons.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/admin/js/buttons.server-side.js') }}" charset="utf-8"></script>
    {{--@notify_css--}}
</head>
<body>
<div class="page home-page">
