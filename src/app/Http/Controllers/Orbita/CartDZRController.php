<?php

namespace App\Http\Controllers\Orbita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrbitaDZR\OrderMail;


class CartDZRController extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if ($token == env('KEY_ORBITA')) {
            Mail::to(env('MAIL_MAIN'))->send(new OrderMail($request));
            // Mail::to(env('MAIL_ORBITA_SV'))->send(new OrderMail($request));
            // Mail::to(env('MAIL_ORBITA_ELNARA'))->send(new OrderMail($request));
            // Mail::to(env('MAIL_ORBITA_JULIA'))->send(new OrderMail($request));
        }
    }
}
