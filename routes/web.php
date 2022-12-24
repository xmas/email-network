<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::webhooks('incoming');

Route::group([
    'prefix' => 'mailgun',
],function () {
    Route::post('widgets', 'MailgunController@store');
});

Route::get('/mail/gathr', function () {
    // $invoice = App\Models\Invoice::find(1);
 
    return new App\Mail\GathrMail();
});