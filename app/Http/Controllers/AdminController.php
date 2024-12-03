<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use Str;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request){

        return view('admin.index');
    }

    public function AdminLogout()
{
    Auth::logout(); 
    return redirect()->route('admin/login');
}

public function AdminLogin(Request $request){
    return view('admin.admin_login');
    
}

public function AdminProfile(){

    $data['getRecord'] = User::find(Auth::user()->id);
    return view('admin.admin_profile', $data);
}

public function admin_profile_update(Request $request){

    // dd($request->all());

    $user = $request->validate([
        'email' => 'required|email|unique:users,email,' . Auth::user()->id,
    ]);    
    $user = User::find(Auth::user()->id);

    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    // $user->photo = $request->photo;

    $image = $request->file('photo');

    $originalImageName = $image->getClientOriginalName();

    $destinationPath = public_path('images');  

    $image->move($destinationPath, $originalImageName);

    $user->photo = url('images/' . $originalImageName);

    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->about = $request->about;
    $user->website = $request->website;
    $user->save();

    return redirect('admin/profile')->with('success','Your profile updated successfully');

}

}
