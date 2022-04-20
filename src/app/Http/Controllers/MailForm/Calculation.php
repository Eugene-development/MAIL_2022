<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\CalculationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Calculation extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if( $token == env('KEY_NOVOSTROY') ){
            Mail::to(env('MAIL_MAIN'))->send(new CalculationMail($request));
            Mail::to(env('MAIL_NOVOSTROY'))->send(new CalculationMail($request));
        }
    }
}
