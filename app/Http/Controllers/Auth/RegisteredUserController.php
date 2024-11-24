<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserOtp;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {


        return redirect()->route('verification.code',[1])
        ->with('message','OTP has been sent to your mobile phone!');


        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255|unique:'.User::class,
            'email' => 'required|string|lowercase|email|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],
            [
                'phone_number.unique' => __('The phone number already exist, kindly login or reset password')
            ]
    );

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        $userVcode =  $this->generateVcode($user->phone_number);




        




  /*       $text = new \Vonage\SMS\Message\SMS($request->phone_number, 'EasyRecharge', 'Your one time  verification code is'.$userVcode->otp);
        $response= Vonage::sms()->send($text);
        ["'.$request->phone_number.'"]
 */



/*          $message = $response->current();

         if ($message->getStatus() == 0) {
             return redirect()->route('verification.code',[$userVcode->user_id])
             ->with('message','OTP has been sent to your mobile phone!');
         } else {
             return redirect()->back()->with('message', $message->getStatus());
         }
 */


        return redirect()->route('verification.code',[$userVcode->user_id])
        ->with('message','OTP has been sent to your mobile phone!');

       /*  Auth::login($user);

        return redirect(RouteServiceProvider::HOME); */
    }

    public function generateVcode($phone_number){
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
            'userID'=> $user_id
        ]);
    }


    public function LoginWithVcode(Request $request) {
        // Validate input values
        $request->validate([
            'otp'=>'required',
            'user_id'=>'required|exists:users,id',
        ],[
            'otp.required'=>'Please enter the verification code sent to you.',
        ]);


       $userVcode = UserOtp::where('user_id', $request->user_id)->where('otp', $request->otp)->first();

       $now = now();

       if(!$userVcode) {
        return redirect()->back()->with('error', "Invalid Verification Code");
       }
       else if($userVcode && $now->isAfter($userVcode->expire_at)) {
           UserOtp::destroy($userVcode->id);
           return redirect()->back()->with('error', "Expired Verification Code. Please Generate a new One.");
       }
       Auth::loginUsingId($request->user_id , true);
       UserOtp::destroy($userVcode->id);
       return redirect()->route('overview');
    }


    function sendsms($mobileno, $message){

        $message = urlencode($message);
        $sender = 'SEDEMO'; 
        $apikey = '62966l6o67lssy7f16icr3288mmter55';
        $baseurl = 'https://instantalerts.co/api/web/send?apikey='.$apikey;
    
        $url = $baseurl.'&sender='.$sender.'&to='.$mobileno.'&message='.$message;    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
    
        // Use file get contents when CURL is not installed on server.
        if(!$response){
            $response = file_get_contents($url);
        }

        return $response;
        
    }
}
