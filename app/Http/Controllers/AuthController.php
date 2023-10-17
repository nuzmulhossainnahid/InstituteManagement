<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registration()

    {
        return view('auth.registration');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->userType==1)
            {
                return redirect("adminDashboard")->withSuccess('You have Successfully logged In');
            }
            elseif(Auth::user()->userType==0)
            {
                return redirect("dashboard")
                    ->withSuccess('You have Successfully logged In');
            }
            else{
                return redirect("login")->withSuccess('Oppes! you are not valid user');
            }
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)

    {
        $data = new User();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->batch = $request->batch;
        $data->password =Hash::make($request->password) ;
        $data->regNo = User::generateRegistrationNumber($request->batch);
        $data->save();
        return redirect("login")->withSuccess('Great! You have Successfully Register, Please Log In');
    }

    public function logout() {

        Session::flush();
        Auth::logout();
        return Redirect('/');

    }
}
