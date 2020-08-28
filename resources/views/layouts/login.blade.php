@include('dashboard.includes.tpl_starter')
<div class="page home-page">
    <div class="login-page">
        <img class="wave-background" src="{{ asset('public/assets/admin/img/login/wave.png') }}"/>
        <!-- Start Container -->
        <div class="container">
            <div class="img">
                <img class="phone-logo" src="{{ asset('public/assets/admin/img/login/phone-logotriu.svg') }}"/>
            </div>
            <!-- Start Login Container -->
            <div class="login-container">
                @yield('content')
            </div>
            <!-- End Login Container -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End Login Page -->
@include('dashboard.includes.footer')
