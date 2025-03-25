<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard\Index as DashboardIndex;
use App\Livewire\Admin\Country\Index as CountryIndex;
use App\Livewire\Admin\State\Index as StateIndex;
use App\Livewire\Admin\City\Index as CityIndex;
use App\Livewire\Admin\Category\Index as CategoryIndex;
use App\Livewire\Admin\Category\Feature as CategoryFeature;
use App\Livewire\Admin\Product\index as ProductIndex;
use App\Livewire\Admin\Product\create as ProductCreate;
use App\Livewire\Admin\Product\content as ProductContent;
use App\Livewire\Admin\Product\CkUpload;
use App\Livewire\Admin\Payment\Index as PaymentMethodIndex;
use App\Livewire\Admin\Setting\ContactUs\Index as ContactUsIndex;








Route::name('admin.')->group(function () {
    //Dashboard
    Route::get('/dashboard',DashboardIndex::class)->name('dashboard.index');
    //Map->Done
    Route::get('/country',CountryIndex::class)->name('country.index');
    Route::get('/state',StateIndex::class)->name('state.index');
    Route::get('/city',CityIndex::class)->name('city.index');
    //Category
    Route::get('/category/', CategoryIndex::class)->name('category.index');
    Route::get('/category/{category}/features', CategoryFeature::class)->name('category.features');
    //Product Route
    Route::get('/product', ProductIndex::class)->name('product.index');
    Route::get('/product/create', ProductCreate::class)->name('product.create');
    Route::get('/product/content/{product}', ProductContent::class)->name('product.content');
    Route::post('/ck-upload/{productId}', [CkUpload::class, 'upload'])->name('ck-upload');

    //PaymentMethod
    Route::get('/paymentMethod',PaymentMethodIndex::class)->name('paymentMethod.index');

    //Setting Website
    Route::get('/contact-us',ContactUsIndex::class)->name('contact-us.index');
});
