<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginproses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password Anda Salah');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succses','Kamu berhasil LogOut');
    }

    public function register(){
        return view('register');
    }

    public function registerproses(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5'
        ]);
         
        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password Anda Salah');
        }
    }
}
