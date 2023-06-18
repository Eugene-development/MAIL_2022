<?php

namespace App\Http\Controllers\MailForm;

use App\Http\Controllers\Controller;
use App\Mail\ConsultationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Consultation extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if ($token == env('KEY_NOVOSTROY')) {
            Mail::to(env('MAIL_MAIN'))->send(new ConsultationMail($request));
            Mail::to(env('MAIL_NOVOSTROY'))->send(new ConsultationMail($request));
        }
    }
}
