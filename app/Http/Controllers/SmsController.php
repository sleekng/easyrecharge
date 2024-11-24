<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;

class SmsController extends Controller
{
    public function index(){

     /*    $user = User::findOrFail(2); */
        

       /*  return (new VonageMessage())
            ->content('Welcome to My App, ' . $this->name . '!'); */

            $text = new \Vonage\SMS\Message\SMS('+2347030068148', 'EasyRecharge', 'Test SMS using Laravel');
            Vonage::sms()->send($text);
    
        return 'Send SMS via Vonage success!';
    }
}
