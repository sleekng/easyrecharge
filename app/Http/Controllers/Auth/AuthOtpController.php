<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
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
        

      $userOtp =  $this->generateOTP($request->phone_number);
      $userOtp->sendSMS($request->phone_number); //Send OTP

      return redirect()->route('home',['user_id',$userOtp->user_id])
        ->with('success','OTP has been sent to your mobile phone !');

    }

    public function generateOTP($phone_number){
       $user = User::where('phone_number', $phone_number)->first();
       $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();
       
       $now = now();
       

       if($userOtp && $now->isBefore($userOtp->expire_at)){
            return $userOtp;
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
