<?php

namespace App\Http\Controllers\ZOV;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ZOV\FormCalculation;


class FormCalculationController extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();

        if ($token == env('KEY_ZOVMSK')) {
            Mail::to(env('MAIL_ZOVMSK'))->send(new FormCalculation($request));
        }
    }
}
