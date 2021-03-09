<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginform(){
        return view('auth.login');
    }

    public function login(Request $request){
        Validator::make($request->all(),[
            'email' => ['required','string','email'],
            'password' => ['required','string','min:4'],
        ])->validate();
        $email = $request->email;
        $password = Hash::make($request->password);
        $user = User::where('email',$email)->first();

//        dd($user);
        if (Hash::check($request->password,$user->password)){
//            dd('ok');
            $role = $user->getRoleNames();
//            dd($rolecredinal);
            $credentials = $request->only('email','password');
            Auth::attempt($credentials);
            if ($role[0] == 'user'){
                return redirect('/');
            }
            else{
                return redirect('/dress');
            }
        }

        else{
            return redirect()->back();
        }
    }
}
