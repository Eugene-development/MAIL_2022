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

        if($token == '3') {
            Mail::to('komodoff2010@gmail.com')->send(new MeasurementMail($request));
            Mail::to('gostremont-direct@yandex.ru')->send(new MeasurementMail($request));
        }
    }
}
