<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $formData = request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required' , 'email', ValidationRule::unique('users', 'email')],
            'username' => ['required','max:255', 'min:3', ValidationRule::unique('users', 'username')],
            'password' => ['required', 'min:8']
        ]);

        $user = User::create($formData);
        auth()->login($user);

        session()->flash('success', 'Welcome '.$user->name.' , to our blog of discovery and sharing through thought-provoking articles.');
        return redirect('/');
    }

    public function login(){
        return view('auth.login');
    }

    public function post_login(){
        //validation
        $formData = request()->validate([
            'email' => ['required', 'email', 'max:255', ValidationRule::exists('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ],[
            'email.required' => "We need your email addresss!",
            'password.min' => "Password must not be less than 8 characters!"
        ]);

        //auth attempt
        if(auth()->attempt($formData)){
            if(auth()->user()->is_admin){
                return redirect('/admin/blogs');
            }else{
                return redirect('/')->with('success', 'Welcome back!');
            }
        }else{
            return redirect()->back()->withErrors([
                'email' => "User credentials wrong!",
            ]);
        }
    }

    public function logout(){
        auth()->logout();
        session()->flash('success', "Thank you for visiting our blog today!");
        return redirect('/');
    }
}
