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
            //            Mail::to('indexpro24@gmail.com')->send(new CartMail($request));
            //            Mail::to('orbita88yuliya@yandex.ru')->send(new CartMail($request));
            Mail::to('komodoff2010@gmail.com')->send(new CalculationMail($request));
        }

        if($token == '2'){
            //            Mail::to('indexpro24@gmail.com')->send(new CartMail($request));
            Mail::to('mebellub@yandex.ru')->send(new CalculationMail($request));
        }
    }
}
