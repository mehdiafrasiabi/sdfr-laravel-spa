<?php

use App\Livewire\Client\AboutUs\Index as AboutUs;
use App\Livewire\Client\ContactUs\Index as ContactUs;
use App\Livewire\Client\Home\Index as HomeIndex;
use App\Livewire\Client\Rules\Index as RuleIndex;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', HomeIndex::class)->name('home');
    Route::get('/rules',RuleIndex::class)->name('rules');
    Route::get('/about-us',AboutUs::class)->name('about-us');
    Route::get('/contact-us',ContactUs::class)->name('contact-us');
});
