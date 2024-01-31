<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signIn(Request $request)
    {
        // ambil value dari login.blade.php dari "name"nya 
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // ngecek valuenya apakah benar
        if (Auth::attempt($credentials)) { 
            // karna uda benar jadi masukin as user
            $user = Auth::user();
            // get username supaya bisa dipassing 
            $username = $user->username;
            $request->session()->put('username', $username);

            return redirect('/home');
        }

        // kalau ga ketemu bakalan dibalikin ke login page lagi
        return redirect('/')
        ->withInput($request->only('email')) 
        ->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/'); 
    }
}
