<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function showCourses() {
        return view('frontend.dashboard.courses');
    }

    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/asom/login');
    }

   
    public function showProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('frontend.dashboard.editProfile', compact('profileData') );
    }

    public function updateUserProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
          $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
          );      

        return redirect()->back()->with($notification);
    }

    public function userChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('user.change_password', compact('profileData') );

    }

    public function updateUserPassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)){
            $notification = array(
                'message' => 'Sorry, old password mismatch',
                'alert-type' => 'error'
              ); 
              return back()->with($notification);
        }
        User::whereid(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        
        $notification = array(
            'message' => 'Password Updated Successfully',
            'alert-type' => 'success'
          ); 
          return back()->with($notification);
    }
}
