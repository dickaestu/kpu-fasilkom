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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:11','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'bukti_ktm'=> ['required', 'image', 'max:2000','mimes:jpg,png,jpeg']
        ],[
            'nim.unique' => 'NIM sudah digunakan',
            'nim.max' => 'NIM maks 11 digit',
            'email.unique' => 'Email sudah digunakan',
            'password.min' => 'Password min 8 digit',
            'password.confirmed' => 'Konfirmasi password berbeda',
            'bukti_ktm.mimes' => 'Format gambar harus jpg/png/jpeg',
            'bukti_ktm.max' => 'Ukuran gambar terlalu besar',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();

        $kd_jurusan = substr($data['nim'], 0, 3);
        

        if($kd_jurusan == '418'){
            $jurusan = 'sistem informasi';
        } else {
            $jurusan = 'teknik informatika';
        }

        $bukti_ktm =  $request->file('bukti_ktm')->store(
            'assets/image', 'public'
        );

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nim' => $data['nim'],
            'jurusan' => $jurusan,
            'bukti_ktm' => $bukti_ktm,
            'password' => Hash::make($data['password']),
        ]);
    }
}
