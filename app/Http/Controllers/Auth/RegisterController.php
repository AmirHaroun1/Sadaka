<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = ([
            'name.min' => 'الأسم يجب أن يكون 3 أحرف على الأقل',
            'name.max' => 'الأسم يجب أن يكون 255 حرف على الأكثر',

            'phone.max' => 'رقم الهاتف يجب أن يكون 11 رقم',
            'phone.min' => 'رقم الهاتف يجب أن يكون 11 رقم',
            'phone.unique' =>'هذا الرقم مسجل بالفعل',

            'email.unique' => 'هذا البريد الألكنرونى مسجل بالفعل ',

            'password.min'=>'الرقم السري يجب أن يكون أكثر من 5 أحرف',
            'password_confirmation.same' => 'غير مطابق لكلمة السر',
            'password_confirmation.min' => 'الرقم السري يجب أن يكون أكثر من 5 أحرف',

        ]);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'password_confirmation' => ['required','min:5','same:password'],

            'phone'=>['required','unique:users','min:11','max:11'],

        ],$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected $redirectPath= '/';


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'image' => 'images/users/default.png',
        ]);
    }
}
