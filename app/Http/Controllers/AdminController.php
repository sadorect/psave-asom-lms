<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        return view('admin.index');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function adminLogin(){
        return view('admin.login');
    }


    public function adminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.profile_view', compact('profileData') );
    }

    public function adminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
          $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
          );      

        return redirect()->back()->with($notification);
    }

    public function adminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.change_password', compact('profileData') );

    }

    public function adminUpdatePassword(Request $request){
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

    public function becomeInstructor(){

        return view('frontend.instructor.register_instructor');
    }

    public function allInstructors(){
        $allInstructors = User::where('role','instructor')->latest()->get();

        return view('admin.backend.instructors.all_instructors', compact('allInstructors'));
    }

    public function instructorRegister(Request $request){

       $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email'=> ['required', 'string', 'unique:users']
       ]);

       User::insert([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'password' => Hash::make($request->password),
        'role' => 'instructor',
        'status' => '0',
        
       ]);

       $notification = array(
        'message' => 'Instructor profile created Successfully',
        'alert-type' => 'success'
      ); 
      return redirect()->route('instructor.login')->with($notification);

    }


    public function allStudents(){
        $allStudents = User::where('role','student')->latest()->get();

        return view('admin.backend.students.all_students', compact('allStudents'));
    }

    public function updateUserStatus(Request $request){
        $userId = $request->input('user_id');
        $isChecked = $request->input('is_checked', 0);

        $user = User::find($userId);

        if($user){
            $user->status = $isChecked;
            $user->save();
        }

        return response()->json(['message' => 'User status updated successfully']);
    }
}
