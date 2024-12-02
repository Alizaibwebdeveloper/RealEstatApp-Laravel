<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request){

        return view('admin.index');
    }

    public function AdminLogout()
{
    Auth::logout(); 
    return redirect()->route('admin.login');
}

public function AdminLogin(Request $request){
    return view('admin.admin_login');
    
}

}
