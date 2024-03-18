<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            // dd($data);
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:255'
            ];
            $customMessages = [
                'email.required' => 'Sorry Email is Required',
                'email.email' => 'Valid Email Is required',
                'password.required' => "Sorry Password is Required"
            ];
            $this->validate($request, $rules, $customMessages);
            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with("error", "Invalid Email Or Password");
            }
        }
        return view('admin.login');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
