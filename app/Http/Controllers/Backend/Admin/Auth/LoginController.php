<?php

namespace App\Http\Controllers\Backend\Admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function login()
    {
        return view('backend.admin.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
       
     
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}