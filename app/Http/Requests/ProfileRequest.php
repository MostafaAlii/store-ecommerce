<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  =>  'required|string',
            'nickname'      =>  'max:10',
            //'phone'      =>  'max:11',
            'email'  =>  'required|email|max:100|unique:admins,email,' . $this->id,
            'address'      =>  'max:100',
            'city'      =>  'max:20',
            'country'      =>  'max:25',
            'bio'      =>  'max:255',
            'password'  =>  'required|confirmed|min:8',
        ];
    }
    public function messages()
    {
        return [
            'name.required'             =>  trans('admin.name_required'),
            'name.string'             =>  trans('admin.name_string'),
            'nickname.max'             =>  trans('admin.nickname_max'),
            'password.required'         =>  trans('admin.password_required'),
            //'phone.max'             =>  trans('admin.phone_max'),
            //'phone.numeric'             =>  trans('admin.phone_numeric'),
            'email.required'        =>  trans('admin.email_required') ,
            'email.email'           =>  trans('admin.email_true') ,
            'email.max'           =>  trans('admin.email_max') ,
            'email.unique'              =>  trans('admin.email_unique'),
            'address.max'           =>  trans('admin.address_max') ,
            'city.max'           =>  trans('admin.city_max') ,
            'country.max'           =>  trans('admin.country_max') ,
            'bio.max'           =>  trans('admin.bio_max') ,
            'password.confirmed'     =>  trans('admin.password_confirmed'),
            'password.min'     =>  trans('admin.password_min'),
        ];
    }
}
