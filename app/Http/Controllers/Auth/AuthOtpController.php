<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Inertia\Inertia;

class AuthOtpController extends Controller
{
    //

    public function register(){

        return Inertia::render( 'Auth/Login' );
    }

    public function generate( Request $request ) {
        
        $request->validate([
            "phone_number"=> 'required|exists:users,phone_number'
        ]);
        

      $userVcode =  $this->generateOTP($request->phone_number);

      /* $text = new \Vonage\SMS\Message\SMS($request->phone_number, 'EasyRecharge', 'Your one time OTP is'.$userOtp->otp);
      Vonage::sms()->send($text); */
      

      return redirect()->route('verification.code',[$userVcode->user_id])
        ->with('message','Verification code has been sent to your mobile phone !');

    }

    public function generateOTP($phone_number){
       $user = User::where('phone_number', $phone_number)->first();
       $userVcode = UserOtp::where('user_id', $user->id)->latest()->first();
       
       $now = now();
       

       if($userVcode && $now->isBefore($userVcode->expire_at)){
            return $userVcode;
       }
       

      return UserOtp::create([
            'user_id' => $user->id,
            'otp'   =>  rand(123456,999999),
            'expire_at' =>  $now->addMinutes(10),
       ]);
    }

    public function verification($user_id){
        return Inertia::render("Auth/Otp/OtpVerification",[
            'user_id'=> $user_id
        ]);
    }
}
