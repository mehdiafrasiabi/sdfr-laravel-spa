<?php

use App\Livewire\Client\AboutUs\Index as AboutUs;
use App\Livewire\Client\ContactUs\Index as ContactUs;
use App\Livewire\Client\Home\Index as HomeIndex;
use App\Livewire\Client\Terms\Index as RuleIndex;
use App\Livewire\Client\Auth\Index as AuthIndex;
use App\Livewire\Client\Product\Index as ProductIndex;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', HomeIndex::class)->name('home');
    Route::get('/product/{p_code}/{slug?}', ProductIndex::class)->name('product');
    Route::get('/terms',RuleIndex::class)->name('terms');
    Route::get('/about-us',AboutUs::class)->name('about-us');
    Route::get('/contact-us',ContactUs::class)->name('contact-us');


    Route::middleware('guest')->group(function () {
        Route::get('/auth', AuthIndex::class)->name('auth.index');
        Route::get('/gmail', [AuthIndex::class, 'redirectToProvider'])->name('gmail');
        Route::get('/auth/gmail/callback', [AuthIndex::class, 'handleProviderCallback'])->name('gmail.callback');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/logout', [AuthIndex::class,'clientLogout'])->name('logout');
    });
});
