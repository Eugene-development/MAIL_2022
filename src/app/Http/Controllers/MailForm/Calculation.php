<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\CalculationMail;
use App\Mail\CartMail;
use App\Mail\MeasurementMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Calculation extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if($token == '4'){
            Mail::to('komodoff2010@gmail.com')->send(new CalculationMail($request));
            Mail::to('buildnovostroi@gmail.com')->send(new CalculationMail($request));
        }
    }
}
