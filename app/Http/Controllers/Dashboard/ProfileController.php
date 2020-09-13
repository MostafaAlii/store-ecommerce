<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
class ProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }

    public function editProfile(){}

    public function updateProfile(){}
}
