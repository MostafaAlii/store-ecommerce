<?php
namespace App\DataTables;
use App\Models\Admin;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
class AdminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('checkbox', 'dashboard.admins.btn.checkbox')
            ->addColumn('view', 'dashboard.admins.btn.view')
            ->addColumn('edit', 'dashboard.admins.btn.edit')
            ->addColumn('delete', 'dashboard.admins.btn.delete')
            ->rawColumns([
                'edit', 'delete', 'view', 'checkbox'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Admin $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Admin $model)
    {
        return Admin::query();
    }
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('admindatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->orderBy(1)
                    ->parameters([
                        'lengthMenu'    =>  [[10, 25, 100,-1], [10, 25, 50, trans('admin.all_records')]],
                        'initComplete'  =>  "function () {
                                                    this.api().columns([4]).every(function () {
                                                        var column = this;
                                                        var input = document.createElement(\"input\");
                                                        $(input).appendTo($(column.footer()).empty())
                                                        .on('keyup', function () {
                                                            column.search($(this).val(), false, false, true).draw();
                                                        });
                                                    });
                                                }",
                        'language'      => datatable_lang(),
                    ])
                    ->buttons(
                        Button::make(['csv', 'className'=>'btn btn-outline-info', 'text'=>'<i class="fa fa-file"> </i> ' . trans('admin.export_csv') ]),
                        Button::make(['excel', 'className'=>'btn btn-outline-success', 'text'=>'<i class="fa fa-file"> </i>' . trans('admin.export_excel_sheet') ]),
                        Button::make(['print', 'className'=>'btn btn-outline-dark', 'text'=>'<i class="fa fa-print"> </i>' .trans('admin.print') ]),
                        Button::make(['reload', 'className'=>'btn btn-outline-warning', 'text'=>'<i class="fa fa-refresh"></i>' ]),
                        Button::make(['className'=>'btn btn-danger delBtn', 'text'=>'<i class="fa fa-trash"> </i>' .trans('admin.delete_all')]),
                        Button::make(['className'=>'btn btn-primary', "action"=>"function()
                                    {
                                        window.location.href = '".route('admin.create_admin_profile')."'
                                    }",
                                        'text'=>'<i class="fa fa-plus"> </i>' .trans('admin.add_new_admin')])
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'name'    =>  'checkbox',
                'data'    =>    'checkbox',
                'title'   =>    '<input type="checkbox" class="check_all" id="checkAll" />',
                'exportable'    =>  'false',
                'printable'    =>  'false',
                'orderable'    =>  'false',
                'searchable'    =>  'false'
            ],
            [
                'name'    =>  'id',
                'data'    =>    'id',
                'title'   =>    trans('admin.table_field_id_number'),
            ],
            [
                'name'    =>  'name',
                'data'    =>    'name',
                'title'   =>    trans('admin.table_field_name'),
            ],
            [
                'name'    =>  'nickname',
                'data'    =>    'nickname',
                'title'   =>    trans('admin.user_nickname'),
            ],
            /*[
                'name'    =>  'photo',
                'data'    =>    'photo',
                'title'   =>    trans('admin.user_photo'),
            ],*/
            [
                'name'    =>  'email',
                'data'    =>    'email',
                'title'   =>    trans('admin.user_email'),
            ],
            [
                'name'    =>  'address',
                'data'    =>    'address',
                'title'   =>    trans('admin.user_address'),
            ],
            [
                'name'    =>  'bio_content',
                'data'    =>    'bio_content',
                'title'   =>    trans('admin.user_bio'),
            ],
            [
                'name'    =>  'city',
                'data'    =>    'city',
                'title'   =>    trans('admin.user_city'),
            ],
            [
                'name'    =>  'country',
                'data'    =>    'country',
                'title'   =>    trans('admin.user_country'),
            ],
            [
                'name'    =>  'created_at',
                'data'    =>    'created_at',
                'title'   =>    trans('admin.created_at'),
            ],
            [
                'name'    =>  'updated_at',
                'data'    =>    'updated_at',
                'title'   =>    trans('admin.updated_at'),
            ],
            [
                'name'    =>  'view',
                'data'    =>    'view',
                'title'   =>    trans('admin.view'),
                'exportable'    =>  'false',
                'printable'    =>  'false',
                'orderable'    =>  'false',
                'searchable'    =>  'false'
            ],
            [
                'name'    =>  'edit',
                'data'    =>    'edit',
                'title'   =>    trans('admin.edit'),
                'exportable'    =>  'false',
                'printable'    =>  'false',
                'orderable'    =>  'false',
                'searchable'    =>  'false'
            ],
            [
                'name'    =>  'delete',
                'data'    =>    'delete',
                'title'   =>    trans('admin.delete'),
                'exportable'    =>  'false',
                'printable'    =>  'false',
                'orderable'    =>  'false',
                'searchable'    =>  'false'
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
