<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\DataTables\AdminDatatable;
//use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index(AdminDatatable $adminDatatable){
        return $adminDatatable->render('dashboard.admins.index');
    }

    public function create(){
        return view('dashboard.admins.add');
    }
}
