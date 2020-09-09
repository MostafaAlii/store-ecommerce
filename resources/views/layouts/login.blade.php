@include('dashboard.includes.tpl_starter')
<div class="page home-page">
    <div class="login-page">
        <!-- Start Container -->
        <div class="container">
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
