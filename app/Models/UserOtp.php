<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Exception;
use Twilio\Rest\Client;

class UserOtp extends Model
{
    use HasFactory;

    protected $fillable= [
        'user_id',
        'otp',
        'expire_at'
    ];


/*     public function sendSMS($receiverNumber){
        
        
        $message = 'Login OTP is '. $this->otp; 
        

        
        try {
            
            $account_id = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $auth_service = getenv("TWILIO_SMS_SERVICE_SID=");
            
         $client = new   Client( $account_id, $auth_token,$auth_service );

         $client->messages->create($receiverNumber,[
            'from' => "EasyRecharge",
            'body' => $message
         ]);

         info('SMS sent successfully!');
            
        } catch (\Exception $e) {
            info("Error:".$e->getMessage());
        }
    } */
}
