<?php

use App\Http\Controllers\MailForm\Calculation;
use App\Http\Controllers\MailForm\Cart;
use App\Http\Controllers\MailForm\Consultation;
use App\Http\Controllers\MailForm\Email;
use App\Http\Controllers\MailForm\Measurement;
use App\Http\Controllers\MailForm\Offer;
use App\Http\Controllers\MailForm\Phone;
use App\Http\Controllers\BioHim\MainFormBH;
use App\Http\Controllers\Azbuka\MainFormAzbuka;
use App\Http\Controllers\Azbuka\SentenceFormAzbuka;
use App\Http\Controllers\ZOV\FormConsultationController;
use App\Http\Controllers\ZOV\FormCalculationController;
use App\Http\Controllers\Orbita\CartDZRController;
use App\Http\Controllers\RemStroyPro\CartRemStroyProController;
use App\Http\Controllers\Novostroy\RequestNovostroyController;
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
// TODO через тире
// Route::post('/sendMainFormBH', [MainFormBH::class, 'send']);
Route::post('/send-form-request-price', [MainFormBH::class, 'send']);

/*
|--------------------------------------------------------------------------
| Azbuka
|--------------------------------------------------------------------------
|
|
|
*/
Route::post('/send-main-form-azbuka', [MainFormAzbuka::class, 'send']);
Route::post('/send-sentence-form-azbuka', [SentenceFormAzbuka::class, 'send']);


/*
|--------------------------------------------------------------------------
| ZOV
|--------------------------------------------------------------------------
|
|
|
*/
Route::post('/sendFormConsultationZOV', [FormConsultationController::class, 'send']);
Route::post('/send-form-calculation-ZOV', [FormCalculationController::class, 'send']);

/*
|--------------------------------------------------------------------------
| Orbita
|--------------------------------------------------------------------------
|
|
|
*/
Route::post('/send-order-orbita-dzr', [CartDZRController::class, 'send']);
Route::post('/send-order-remstroypro', [CartRemStroyProController::class, 'send']);

/*
|--------------------------------------------------------------------------
| Novostroy
|--------------------------------------------------------------------------
|
|
|
*/
Route::post('/send-form-designer-request', [RequestNovostroyController::class, 'send']);
Route::post('/send-form-measuring-request', [RequestNovostroyController::class, 'send']);
Route::post('/send-form-salon-request', [RequestNovostroyController::class, 'send']);
