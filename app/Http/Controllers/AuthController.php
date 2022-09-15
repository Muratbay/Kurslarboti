<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');  
    }
    public function login(Request $request){
        $check = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $admin = Auth::attempt($check);
        if($admin){
            $request->session()->regenerate();
            return view('admin.index');
        }
        else{
            return redirect('/login');
        }
       

    }
    public function logout(){
       Auth::logout();
        return redirect('/login');
    }
}
