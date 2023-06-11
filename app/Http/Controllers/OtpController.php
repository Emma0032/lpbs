<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // User not found, handle error
        }

        $otp = Str::random(6); // Generate a random 6-digit OTP

        // Save the OTP to the user's record in the database
        $user->otp_code = $otp;
        $user->save();

        // Send the OTP to the user's email
        Mail::to($user->email)->send(new OtpMail($otp));

        // Redirect or return a response as needed
    }
}
