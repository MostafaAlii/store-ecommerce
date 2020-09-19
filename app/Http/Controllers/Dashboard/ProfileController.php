<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }

    public function create(){
        return view('dashboard.admins.add');
    }

    public function store(AdminRequest $request){
        //return $request;
        try {
            // First Insert Statement
            DB::beginTransaction();
            Admin::create($request);
            return redirect()->back()->with(['success' => trans('admin.admin_insert_success')]);
        } catch (\Exception $exc) {
            return redirect()->back()->with(['error' => trans('admin.admin_insert_error')]);
        }
    }

    public function editProfile(){
        $admin = Admin::find(auth('admin')->user()->id);

        return view('dashboard.profile.edit', compact('admin'));
    }

    public function updateProfile(ProfileRequest $request){
        // First Make Validation Using ProfileRequest File
        // Update In DB
        try {
            $admin = Admin::find(auth('admin')->user()->id);
            if ($request->filled('password')) {
                $request->merge(['password' => bcrypt($request->password)]);
            }
            unset($request['id']);
            unset($request['password_confirmation']);
            //DB::beginTransaction();
            $admin->update($request->all());
            // Redirect and Success Message ::
            //DB::commit();
            return redirect()->back()->with(['success' => trans('admin.update_profile_info_success')]);
            } catch (\Exception $exc) {
                return redirect()->back()->with(['error' => trans('admin.update_profile_info_error')]);
                //DB::rollback();
            }
    }
}
