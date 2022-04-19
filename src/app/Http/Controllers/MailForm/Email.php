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
        if($token == '3'){
            Mail::to('komodoff2010@gmail.com')->send(new EmailMail($request));
            Mail::to('gostremont-direct@yandex.ru')->send(new EmailMail($request));
        }
    }
}
