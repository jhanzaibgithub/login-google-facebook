<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseTestController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\FacebookLoginController;
use Laravel\Socialite\Facades\Socialite;

Route::get('login/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

Route::get('home', [GoogleLoginController::class, 'home'])->name('home');


Route::get('login/facebook', [FacebookLoginController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [FacebookLoginController::class, 'handleFacebookCallback']);

Route::get('login/linkedin', [GoogleLoginController::class, 'redirectToLinkedIn']);
Route::get('login/linkedin/callback', [GoogleLoginController::class, 'handleLinkedInCallback']);

Route::get('/firebase/store', [FirebaseTestController::class, 'storeToFirebase']);
Route::get('/firebase/notify', [FirebaseTestController::class, 'sendFirebaseNotification']);

Route::get('/', function () {
    return view('welcome');
});
