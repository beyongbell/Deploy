<?php
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-queue', function () {
    Mail::to('tinnakornchoompee@gmail.com')->send(new Testmail());
    return "Working";
});
