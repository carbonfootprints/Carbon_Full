<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/');
    }

    

    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('user.signIn');
    }
    

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            
            if ($user->role == 0) {
                return redirect('/admin/default'); 
            } 
            // elseif ($user->role == 1) {
            //     return redirect('/publisher'); 
            // }
        
            // return redirect('/');
        }

        return back()->with('error', 'Invalid credentials');
    }




    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('authlogin'); 
    }
}
