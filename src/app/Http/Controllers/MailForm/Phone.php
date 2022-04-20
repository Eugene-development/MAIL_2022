<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\PhoneMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Phone extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if($token == env('KEY_GOSTREMONT')){
            Mail::to(env('MAIL_MAIN'))->send(new PhoneMail($request));
            Mail::to(env('MAIL_GOSTREMONT'))->send(new PhoneMail($request));
        }
    }
}
