<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditProfileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['string', 'max:255', 'min:3'],
            'phone' => ['string', 'max:11','min:11'],
            'email'=>[
                Rule::unique('users')->ignore(auth()->user()),'email',
            ],
            'profileImage' => [
            ],
            'password' => [
                'string','min:8','max:255','confirmed'
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.min' => 'الأسم يجب أن يكون 3 أحرف على الأقل',
            'name.max' => 'الأسم يجب أن يكون 255 حرف على الأكثر',
            'name.string' => 'الأسم يجب مكون من أحرف',

            'phone.max' => 'رقم الهاتف يجب أن يكون 11 رقم',
            'phone.min' => 'رقم الهاتف يجب أن يكون 11 رقم',

            'email.unique' => 'هذا البريد الألكنرونى مسجل بالفعل ',

            'password.min'=>'الرقم السري يجب أن يكون أكثر من 5 أحرف',
            'password.confirmed'=>'الرقم السرى غير مطابق',

            'name.max' => 'أسم الحملة يجب ألا يتجاوز 255 حرف'

        ];
    }

}
