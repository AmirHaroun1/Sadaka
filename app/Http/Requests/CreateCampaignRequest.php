<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCampaignRequest extends FormRequest
{

    public function rules()
    {
        return [
            'NewUserName' => ['required', 'string', 'max:255', 'min:3'],
            'NewUserPhone' => ['required', 'string', 'max:11','min:11'],
            'email' => [  'unique:users','email','required'],
            'NewUserPassword' => ['required', 'string','min:5'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'NewUserName.required' => 'هذا الحقل مطلوب',
            'NewUserName.min' => 'الأسم يجب أن يكون 3 أحرف على الأقل',
            'NewUserName.max' => 'الأسم يجب أن يكون 255 حرف على الأكثر',

            'NewUserPhone.max' => 'رقم الهاتف يجب أن يكون 11 رقم',
            'NewUserPhone.min' => 'رقم الهاتف يجب أن يكون 11 رقم',
            'email.unique' => 'هذا البريد الألكنرونى مسجل بالفعل ',

            'NewUserPassword.min'=>'الرقم السري يجب أن يكون أكثر من 5 أحرف',

            'name.max' => 'أسم الحملة يجب ألا يتجاوز 255 حرف'

        ];
    }
}
