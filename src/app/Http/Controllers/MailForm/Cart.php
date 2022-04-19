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

        if($token == '1'){
            Mail::to('komodoff2010@gmail.com')->send(new CartMail($request));
            Mail::to('info@orbita-stroy.com')->send(new CartMail($request));
        }

        if($token == '2'){
            Mail::to('komodoff2010@gmail.com')->send(new CartMail($request));
            Mail::to('mebellub@yandex.ru')->send(new CartMail($request));
        }
    }
}
