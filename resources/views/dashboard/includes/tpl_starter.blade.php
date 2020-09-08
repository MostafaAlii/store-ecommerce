<!DOCTYPE html>
<html lang="en" data-textdirection="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ trans('admin.dashboard') }} | @yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/' .getMainStyleCssFile(). '.css') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&amp;family=Open+Sans&amp;display=swap"/>
    @notify_css
</head>
<body>
<div class="page home-page">
