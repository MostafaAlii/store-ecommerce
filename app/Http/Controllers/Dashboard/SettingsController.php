<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
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

    public function updateShippingMethods(Request $request, $id){

    }
}
