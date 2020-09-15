<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCampaignRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => [ 'string', 'max:255', 'min:3'],
            'phone'=>['required','unique:users','min:11','max:11'],
            'email' => ['unique:users','email'],
            'password' => [ 'string','min:5'],
            'description' => ['string'],
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'الأسم يجب أن يكون 3 أحرف على الأقل',
            'name.max' => 'الأسم يجب أن يكون 255 حرف على الأكثر',

            'phone.max' => 'رقم الهاتف يجب أن يكون 11 رقم',
            'phone.min' => 'رقم الهاتف يجب أن يكون 11 رقم',

            'email.unique' => 'هذا البريد الألكنرونى مسجل بالفعل ',

            'password.min'=>'الرقم السري يجب أن يكون أكثر من 5 أحرف',

        ];
    }
}
