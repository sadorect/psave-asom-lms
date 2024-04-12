<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\registrationConfirm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('frontend.dashboard.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        /* Validate reCAPTCHA
        $captcha = new googlerecaptchav3();
        $response = $captcha->verifyResponse($request->input('g-recaptcha-response'));

        if (!$response->isSuccess()) {
            // reCAPTCHA validation failed
            return back()->withErrors(['captcha' => 'Invalid CAPTCHA. Please try again.']);
        } 
        */
        if ($request->soup == '') {
                  
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        /// Start send mail to registered User ///

        $sendmail = User::find($user->id);

        $data = [
            'name' => $sendmail->name,
            'email'=> $sendmail->email
        ];

        

       // Mail::to($request->email)->send(new registrationConfirm($data));
        

        $notification = array(
            'message' => 'Your registration was successful',
            'alert-type' => 'success'
          );
        /// End send mail ///

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with($notification);
        }
    }

    

   

}
