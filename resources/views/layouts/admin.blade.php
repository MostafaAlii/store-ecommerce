@include('dashboard.includes.tpl_starter')
@include('dashboard.includes.settings_box')
@include('dashboard.includes.sidebar')

<div class="content-area">
    @include('dashboard.includes.header')
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

@include('dashboard.includes.footer')

@notify_js
@notify_render
