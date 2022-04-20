<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\MeasurementMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Measurement extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if($token == env('KEY_GOSTREMONT')) {
            Mail::to(env('MAIL_MAIN'))->send(new MeasurementMail($request));
            Mail::to(env('MAIL_GOSTREMONT'))->send(new MeasurementMail($request));
        }
    }
}
