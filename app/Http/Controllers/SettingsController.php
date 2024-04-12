<?php

namespace App\Http\Controllers;

use App\Models\SmtpSetting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function SmtpSettings(){

        $smtp = SmtpSetting::find(1);
        return view('admin.backend.settings.smtp_settings',compact('smtp'));

    }// End Method
}
