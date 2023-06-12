<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
use Illuminate\Support\Str;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request)
    {
        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            $otp = Str::random(6); // Generate a random 6-digit OTP

            // Save the OTP to the user's record in the database
            $user->otp_code = $otp;
            $user->save();

            // Send the OTP to the user's email
            Mail::to($user->email)->send(new OtpMail($otp));

            // Redirect or return a response as needed
            // For example, you can redirect back to the verification page with a success message
            return redirect()->back()->with('success', 'OTP has been sent to your email for verification.');
        }

        // User already verified, handle accordingly
    }

    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response(['message' => 'Email already verified.'], 400);
        }

        $request->user()->sendEmailVerificationNotification();

        // Call the sendOtp method instead of the default behavior
        return $this->sendOtp($request);
    }
}
