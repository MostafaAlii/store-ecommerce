<?php
// Important Costants ::
define('PAGINATION_COUNT', 15);
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

// Load Main Categories in JsTree In Create SubCategory Page ::
if (!function_exists('load_mainCategories')){
    function load_mainCategories($select = null) {
        $categories = \App\Models\Category::selectRaw('name' . ' as text')
                        ->selectRaw('id as id')
                        ->selectRaw('parent_id as parent')
                        ->get(['text', 'parent', 'id']);
        
        $categories_arr = [];
        foreach ($categories as $category) {
            $list = [];
            if ($select !== null and $select == $category->id) {
                $list_arr['icon']           =   '';
                $list_arr['li_attr']        =   '';
                $list_arr['a_attr']         =   '';
                $list_arr['children']       =   [];
                $list_arr['state']          =   [
                    'opened'    =>  true,
                    'selected'  =>  true,
                ];
            }
            $list_arr['id'] = $category->id;
            $list_arr['parent'] = $category->parent !== null ? $category->parent:'#';
            $list_arr['text'] = $category->text;
            array_push($categories_arr, $list_arr);
        }
        return json_encode($categories_arr, JSON_UNESCAPED_UNICODE);
    }
}
