<?php

namespace App\Http\Controllers\Novostroy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Novostroy\FormSubscription;


class SubscriptionNovostroyController extends Controller
{
    public function send(Request $request): void
    {
        $token = $request->bearerToken();

        if ($token == env('KEY_NOVOSTROY')) {
            Mail::to(env('MAIL_NOVOSTROY'))->send(new FormSubscription($request));
            Mail::to(env('MAIL_MAIN'))->send(new FormSubscription($request));
        }
    }
}
