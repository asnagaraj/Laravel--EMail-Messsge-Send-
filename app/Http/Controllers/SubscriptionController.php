<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SubscriptionMail;


class SubscriptionController extends Controller
{
    public function send_mail()
    {
        $to_email = 'vetrichelvi.m@synamen.com';
        $name = 'Nagaraj';
        Mail::to($to_email)->send(new SubscriptionMail($name));
        return back();
    }
}
