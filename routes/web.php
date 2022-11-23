<?php

use Illuminate\Http\Request;

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

Route::post('send-mail', function (Request $request) {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp',
    ];

    $details = array_merge($details, $request->all());
    $details['price'] = implode(',', $details['price']);

    \Mail::to('sale@web-vector.ru')->send(new \App\Mail\SendSaleMail($details));

    return redirect()->back()
        ->with(['success' => 'Спасибо за обращение, мы свяжемся с Вами!']);
});
