<?php

namespace App\Http\Controllers\BioHim;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\BioHim\MainFormMail;
use Illuminate\Http\Request;


class MainFormBH extends Controller
{
    public function send(Request $request)

    {
        $token = $request->bearerToken();

        if ($token == env('KEY_BIOHIM')) {
            Mail::to(env('MAIL_MAIN'))->send(new MainFormMail($request));
            Mail::to(env('MAIL_BIOHIM'))->send(new MainFormMail($request));
        }
    }
}
