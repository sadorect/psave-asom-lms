<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
  public function showHome(){
    return view('admin.backend.homepage.homepage');
  }

  public function homepageStore(Request $request){

        Homepage::insert([
            'description' => $request->description,
            'videoUrl' => $request->videoUrl,
            'showVideoBtn' => $request->showVideoBtn,
            'donateBtnTxt' => $request->donateBtnTxt,
            'showDonateBtn' => $request->showDonateBtn,
            'bannerTitle' => $request->bannerTitle,
            'bannerImage' => $request->bannerImage,
         
        ]);
 
        $notification = array(
         'message' => 'Homepage data updated successfully',
         'alert-type' => 'success'
       ); 
       return redirect()->route('instructor.login')->with($notification);
 
     }
}
