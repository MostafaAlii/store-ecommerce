    <!-- Start Footer -->
    <div class="footer">
        
        <!-- JS Script included -->
        <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/switchery/switchery.min.js') }}"></script>
        
        <script src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/admin/js/ck_config_file_ar.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/jstree/src/jstree.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/jstree/src/jstree.checkbox.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/jstree/src/jstree.wholerow.js') }}"></script>
        <script src="{{ asset('assets/admin/js/mainJS.js') }}"></script>
        <script src="{{ asset('assets/admin/js/function.js') }}"></script>
        @stack('js')
        @stack('css')
    </div>
    <!-- End Footer -->
</div>
<!-- End home page -->
</body>
</html>
