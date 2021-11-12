<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterNewUser extends FormRequest
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

            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6|confirmed',
            'name'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Không được để trống tên',
            'email.required'=>'Email của bạn đang trống',
            'email.email'=>'Chưa đúng định dạng email',
            'password.confirmed'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu tối thiếu 6 ký tự',
            'password.current_password'=>'Xác nhận mật khẩu không chính xác',
        ];
    }
}
