<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.admin-login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('getDashboard')->with('success', 'You are already logged in.');
        } else {
            return back()->with('error', 'Whoops! invalid email and password');
        }
    }

    public function getDashboard()
    {
        if (auth()->guard('admin')->check()) {
            return view('admin.admin-dashboard');
        } else {
            return redirect()->route('getLogin')->withErrors([
                'email' => 'Please Login to access the admin dashboard'
            ])->onlyInput('email');
        }
    }
}
