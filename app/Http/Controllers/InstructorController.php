<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    public function instructorDashboard(){
        return view('instructor.index');
    }


    public function instructorLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/instructor/login');
    }

    public function instructorLogin(){
        return view('instructor.login');
    }


    public function instructorProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('instructor.profile_view', compact('profileData') );
    }

    public function instructorProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/instructor_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/instructor_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
          $notification = array(
            'message' => 'instructor Profile Updated Successfully',
            'alert-type' => 'success'
          );      

        return redirect()->back()->with($notification);
    }

    public function instructorChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('instructor.change_password', compact('profileData') );

    }

    public function instructorUpdatePassword(Request $request){
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
