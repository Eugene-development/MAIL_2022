<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\CartMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Cart extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if($token == env('KEY_ORBITA')) {
            Mail::to(env('MAIL_MAIN'))->send(new CartMail($request));
            Mail::to(env('MAIL_ORBITA'))->send(new CartMail($request));
        }

        if($token == env('KEY_LUBAMEBEL')) {
            Mail::to(env('MAIL_MAIN'))->send(new CartMail($request));
            Mail::to(env('MAIL_LUBAMEBEL'))->send(new CartMail($request));
        }
    }
}
