<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
//use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request){
        // First Step Validation with AdminLoginRequest ;
        //Second Step Using Guard To Check The Username & Password In Admins Table ;
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(
            [
                'email'    =>  $request->input("email"),
                'password'  =>  $request->input("password")
            ],
            $remember_me)) {
            //notify()->success(trans('admin.success_login'));
            return redirect()->route('admin.dashboard');
        }
        //notify()->error(trans('admin.login_access_error'));
        return redirect()->back()->with(['error' =>  trans('admin.login_access_error')]);
    }
}
