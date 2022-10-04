<?php

use App\Http\Controllers\MailForm\Calculation;
use App\Http\Controllers\MailForm\Cart;
use App\Http\Controllers\MailForm\Consultation;
use App\Http\Controllers\MailForm\Email;
use App\Http\Controllers\MailForm\Measurement;
use App\Http\Controllers\MailForm\Offer;
use App\Http\Controllers\MailForm\Phone;
use App\Http\Controllers\BioHim\MainFormBH;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/health', function () {
    return 'Hello World';
});

Route::post('/sendOrder', [Cart::class, 'send']);
Route::post('/sendPhone', [Phone::class, 'send']);
Route::post('/sendEmail', [Email::class, 'send']);
Route::post('/sendMeasurement', [Measurement::class, 'send']);
Route::post('/sendCalculation', [Calculation::class, 'send']);
Route::post('/sendConsultation', [Consultation::class, 'send']);
Route::post('/sendOffer', [Offer::class, 'send']);

/*
|--------------------------------------------------------------------------
| BioHim
|--------------------------------------------------------------------------
|
|
|
*/
Route::post('/sendMainFormBH', [MainFormBH::class, 'send']);
