<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\EmailMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
    public function send(Request $request)

    {
        $token = $request->bearerToken();
        if($token == env('KEY_GOSTREMONT')){
            Mail::to(env('MAIL_MAIN'))->send(new EmailMail($request));
            Mail::to(env('MAIL_GOSTREMONT'))->send(new EmailMail($request));
        }
        if($token == env('KEY_BIOHIM')){
            Mail::to(env('MAIL_MAIN'))->send(new EmailMail($request));
            Mail::to(env('MAIL_BIOHIM'))->send(new EmailMail($request));
        }

    }
}
