<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginAndRegistrationController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function store(Request $request ) {
        
        $data = $request->validate([
            'username' => ['required', 'min:3', 'unique:users,name'],
            'password' => ['required', 'min:8']
        ]);
        User::create([
            'name' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('/login');
    }

    public function login() {
        return view('auth.login');
    }

    public function auth(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('note');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
