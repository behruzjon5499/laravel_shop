<?php

namespace App\Http\Controllers;

use App\Mail\UserRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Builder;

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
        $user = User::query()->where('email', '=', $validated['email'])->first();


        $password = rand(10000, 100000);
        if ($user->email) {
            Mail::to($user)->send(new UserRegister($user, $password));
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
        $validated['password'] = Hash::make($request->password);
        $user = User::create($validated);

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

    public function loginGoogle()
    {
          return Socialite::driver('google')->redirect();

    }
    public function loginFacebook()
    {
        return Socialite::driver('facebook')->redirect();

    }
    public function callbackFromGoogle()
    {
        try {

           $googleUser  = Socialite::driver('google')->user();

           $user  = User::where(function (\Illuminate\Database\Eloquent\Builder $query) use($googleUser){
               $query->orwhere('google_id',$googleUser->getId())
                   ->orwhere('email',$googleUser->getEmail());
           })->first();

           if (!$user){
               $new_user = User::create([
                 'name'=>$googleUser->getName(),
                 'email'=>$googleUser->getEmail(),
                 'google_id'=>$googleUser->getId(),
                 'avatar'=>$googleUser->getAvatar(),
                 'password'=>Hash::make(rand(0,6)),
               ]);
               Auth::login($new_user);
               return redirect('/');
           }
           else{
               $user->avatar=$googleUser->getAvatar();
               $user->google_id=$googleUser->getId();
               $user->save();
               Auth::login($user);
               return redirect('/');
           }

        } catch (\Throwable $th) {
            throw $th;
        }

    }
    public function callbackFromFacebook()
    {
        try {

           $facebookUser  = Socialite::driver('facebook')->user();

            $user  = User::where(function (\Illuminate\Database\Eloquent\Builder $query) use($facebookUser){
                $query->orwhere('facebook_id',$facebookUser->getId())
                    ->orwhere('email',$facebookUser->getEmail());
            })->first();
           if (!$user){
               $new_user = User::create([
                 'name'=>$facebookUser->getName(),
                 'email'=>$facebookUser->getEmail(),
                 'facebook_id'=>$facebookUser->getId(),
                 'avatar'=>$facebookUser->getAvatar(),
                 'password'=>Hash::make(rand(0,6)),
               ]);
               Auth::login($new_user);
               return redirect('/');
           }
           else{
               $user->avatar=$facebookUser->getAvatar();
               $user->facebook_id=$facebookUser->getId();
               $user->save();
               Auth::login($user);
               return redirect('/');
           }

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
