    <!-- Start Footer -->
    <div class="footer">
        <div class="copyright">
            <div class="container">
                <div class="row fixed">
                    <div class="col text-right">
                        <ul class="list-unstyled">
                            <li>{{ trans('admin.copyright')}} &copy; {{trans('admin.website_name')  }}</li>
                        </ul>
                    </div>
                    <div class="col text-left">
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS Script included -->
        <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/admin/js/ck_config_file_ar.js') }}"></script>
        <script src="{{ asset('assets/admin/js/mainJS.js') }}"></script>
        @stack('js')
        @stack('css')
    </div>
    <!-- End Footer -->
</div>
<!-- End home page -->
</body>
</html>
