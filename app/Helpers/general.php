<?php
// Important Costants ::
define('PAGINATION_COUNT', 10);
// get Main CSS File ltr or rtl ::
function getMainStyleCssFile(){
    return app()->getLocale() == 'ar' ? 'main' : 'mainltr';
}

// Datatables Languages ::
if (!function_exists('datatable_lang')){
    function datatable_lang(){
        return [
            'sProcessing'           =>  trans('admin.sProcessing'),
            'sLengthMenu'           =>  trans('admin.sLengthMenu'),
            'sZeroRecords'          =>  trans('admin.sZeroRecords'),
            'sEmptyTable'           =>  trans('admin.sEmptyTable'),
            'sInfo'                 =>  trans('admin.sInfo'),
            'sInfoEmpty'            =>  trans('admin.sInfoEmpty'),
            'sInfoFiltered'         =>  trans('admin.sInfoFiltered'),
            'sInfoPostFix'          =>  trans('admin.sInfoPostFix'),
            'sSearch'               =>  trans('admin.sSearch'),
            'sUrl'                  =>  trans('admin.sUrl'),
            'sInfoThousands'        =>  trans('admin.sInfoThousands'),
            'sLoadingRecords'       =>  trans('admin.sLoadingRecords'),
                'oPaginate'             =>  [
                    'sFirst'                =>  trans('admin.sFirst'),
                    'sLast'                =>  trans('admin.sLast'),
                    'sNext'                =>  trans('admin.sNext'),
                    'sPrevious'            =>  trans('admin.sPrevious'),
                ],
                'oAria'                 =>  [
                    'sSortAscending'                =>  trans('admin.sSortAscending'),
                    'sSortDescending'               =>  trans('admin.sSortDescending'),
                ],
        ];
    }
}

