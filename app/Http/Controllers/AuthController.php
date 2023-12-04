<?php

namespace App\Http\Controllers;

use App\Mail\UserRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function forgot_password()
    {
        return view('auth.forgot-password');
    }
    public function password_send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:250',
        ]);
        $user = User::query()->where('email','=',$validated['email'])->first();


        $password = rand(10000,100000);
         if ($user->email){
             Mail::to($user)->send(new UserRegister($user,$password));
         }
         $user->password = Hash::make($password);
         $user->save();
        return redirect('/')->withSuccess('Successfully reset');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function register_store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);
         $validated['password']  =  Hash::make($request->password);
         $user  =  User::create($validated);

        auth()->login($user);

        return redirect('/')->withSuccess('You have successfully registered & logged in!');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
