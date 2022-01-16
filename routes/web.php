<?php

use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('mailable', function () {
//     return (new MailMessage)
//         ->subject('Recuperação de Senha - ' . config('app.name'))
//         ->markdown(
//             'emails.auth.reset_password',
//             ['name' => 'Fernando Cavaclcante', 'url' => '']
//         )->render();
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
