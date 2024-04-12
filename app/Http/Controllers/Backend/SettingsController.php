<?php

namespace App\Http\Controllers\Backend;

use App\Models\SmtpSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function smtpSettings(){

        $smtp = SmtpSetting::find(1);
        return view('admin.backend.settings.smtp_settings',compact('smtp'));

    }// End Method

    //
    public function smtpUpdate(Request $request){
        $smtp_id = $request->id;
    
        // Check if a record with the given ID exists
        $smtpSetting = SmtpSetting::find($smtp_id);
    
        if ($smtpSetting) {
            // Update existing record
            $smtpSetting->update([
                'mailer' =>  $request->mailer,
                'host' =>  $request->host,
                'port' =>  $request->port,
                'username' =>  $request->username,
                'password' =>  $request->password,
                'encryption' =>  $request->encryption,
                'from_address' =>  $request->from_address, 
                'from_name' =>  $request->from_name,
            ]);
        } else {
            // Create a new record
            SmtpSetting::create([
                'mailer' =>  $request->mailer,
                'host' =>  $request->host,
                'port' =>  $request->port,
                'username' =>  $request->username,
                'password' =>  $request->password,
                'encryption' =>  $request->encryption,
                'from_address' =>  $request->from_address, 
                'from_name' =>  $request->from_name,
            ]);
        }
    
        $notification = array(
            'message' => 'Smtp Settings Updated Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
}
