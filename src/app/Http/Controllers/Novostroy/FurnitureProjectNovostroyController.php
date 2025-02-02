<?php

namespace App\Http\Controllers\Novostroy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Novostroy\FormFurnitureProject;

class FurnitureProjectNovostroyController extends Controller
{
    public function send(Request $request): void
    {
        $token = $request->bearerToken();

        if ($token == env('KEY_NOVOSTROY')) {
            Mail::to(env('MAIL_NOVOSTROY'))->send(new FormFurnitureProject($request));
            Mail::to(env('MAIL_MAIN'))->send(new FormFurnitureProject($request));
        }
    }
}
