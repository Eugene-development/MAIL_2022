<?php

namespace App\Http\Controllers\RemStroyPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrbitaDZR\OrderMail;

class CartRemStroyProController extends Controller
{
    public function send(Request $request) : void
    {
        $token = $request->bearerToken();
    
        if ($token == env('KEY_REMSTROYPRO')) {
            Mail::to(env('MAIL_MAIN'))->send(new OrderMail($request));
            Mail::to(env('MAIL_ORBITA_IRA'))->send(new OrderMail($request));
        }
    }
}
