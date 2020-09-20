<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class AdminRequest extends FormRequest
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
            'email'  =>  'required|email|max:100|unique:admins,email,',
            'password'  =>  'required|min:8',
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
            'password.min'     =>  trans('admin.password_min'),
        ];
    }
}
