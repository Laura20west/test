<?php

namespace App\Http\Controllers;

use App\Mail\Featurenotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail(){
        $toEmail = 'Laura20west@gmail.com';//auth user email
        $message = 'You have subscribed';
        $subject = 'Subscription Notifications';

        Mail::to($toEmail)-> send(new Featurenotification($message, $subject));
    }
}
