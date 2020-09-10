<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use DB;
class SettingsController extends Controller
{
    public function editShippingMethods($type){
        // free_shipping, inner_shipping, external_shipping for shipping methods
        if ($type === 'free_shipping')
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();
        elseif ($type === 'inner_shipping')
            $shippingMethod = Setting::where('key', 'local_label')->first();
        elseif ($type === 'outer_shipping')
            $shippingMethod = Setting::where('key', 'outer_label')->first();
        else
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();
        return view('dashboard.settings.shippings.edit', compact('shippingMethod'));
    }

    public function updateShippingMethods(ShippingRequest $request, $id){
        // First Step - Validation Using ShippingRequest File ::
        try {
            // Second Step -  Updating into DB ::
            $shipping_method = Setting::find($id);
            DB::beginTransaction();
            $shipping_method->update(['plain_value'   =>  $request->plain_value]);
            // Finally - Save Updating Data into DB ::
            $shipping_method->value = $request->value;
            $shipping_method->save();
            // Redirect and Success Message ::
            DB::commit();
            return redirect()->back()->with(['success' => trans('admin.shipping_methods_success_edit')]);
        }
        catch (\Exception $ex) {
            return redirect()->back()->with(['error' => trans('admin.shipping_methods_error')]);
            DB::rollback();
        }
    }
}
