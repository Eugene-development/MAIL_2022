<?php

namespace App\Http\Controllers\Azbuka;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Azbuka\SentenceFormMail;



class SentenceFormAzbuka extends Controller
{
    public function send(Request $request)

    {
        $token = $request->bearerToken();

        if ($token == env('KEY_AZBUKA')) {
            Mail::to(env('MAIL_MAIN'))->send(new SentenceFormMail($request));
        }
    }
}
