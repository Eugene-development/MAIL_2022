<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\OfferMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Offer extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();


        if( $token == env('KEY_NOVOSTROY') ){
            Mail::to(env('MAIL_MAIN'))->send(new OfferMail($request));
            Mail::to(env('MAIL_NOVOSTROY'))->send(new OfferMail($request));
        }

        if($token == env('KEY_ORBITA')) {
            Mail::to(env('MAIL_MAIN'))->send(new OfferMail($request));
            Mail::to(env('MAIL_ORBITA'))->send(new OfferMail($request));
        }

    }

}
