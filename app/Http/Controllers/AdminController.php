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
    Auth::logout(); // Properly logs out the current authenticated user
    return redirect()->route('login'); // Redirects to the login page
}

}
