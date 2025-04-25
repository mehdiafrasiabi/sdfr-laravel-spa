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
use App\Livewire\Admin\Setting\GeneralSetting\Index as GeneralSettingIndex;
use App\Livewire\Admin\Story\Index as StoryIndex;
use App\Livewire\Admin\User\Index as UserIndex;
use App\Livewire\Admin\Transaction\Index as TransactionIndex;
use App\Livewire\Admin\Order\Details as OrderDetails;
use App\Livewire\Admin\Order\Index as OrderIndex;
use App\Livewire\Admin\Student\Index as StudentIndex;
use App\Livewire\Admin\Student\Barnameh as StudentPlan;
use App\Livewire\Admin\Student\ReportMonthly as StudentReportMonthly;
use App\Livewire\Admin\Student\Information as StudentInformation;
use App\Livewire\Admin\Coupon\Index as CouponIndex;
use App\Livewire\Admin\Auth\Index as AuthIndex;
use App\Livewire\Admin\AdminUser\Index as AdminIndex;



Route::name('admin.')->group(function () {

    Route::get('/sign-in',AuthIndex::class)->name('sign-in')->middleware('guest:admin');
    Route::get('/logout', [AuthIndex::class,'logout'])->name('logout')->middleware('auth:admin');

    Route::middleware('auth:admin')->group(function () {
        //Dashboard
        Route::get('/dashboard',DashboardIndex::class)->name('dashboard.index');
        //Map->Done
        Route::get('/country',CountryIndex::class)->name('country.index');
        Route::get('/state',StateIndex::class)->name('state.index');
        Route::get('/city',CityIndex::class)->name('city.index');
        //Category
        Route::get('/category', CategoryIndex::class)->name('category.index');
        Route::get('/category/{category}/features', CategoryFeature::class)->name('category.features');
        //Product Route
        Route::get('/product', ProductIndex::class)->name('product.index');
        Route::get('/product/create', ProductCreate::class)->name('product.create');
        Route::get('/product/content/{product}', ProductContent::class)->name('product.content');
        Route::post('/ck-upload/{productId}', [CkUpload::class, 'upload'])->name('ck-upload');

        //PaymentMethod
        Route::get('/paymentMethod',PaymentMethodIndex::class)->name('paymentMethod.index');

        //Setting Website
        Route::get('/setting/contact-us',ContactUsIndex::class)->name('setting.contact-us.index');
        Route::get('/setting/general-setting',GeneralSettingIndex::class)->name('setting.general-setting.index');

        //Story
        Route::get('/story',StoryIndex::class)->name('story.index');

        //User
        Route::get('/user',UserIndex::class)->name('user.index');
        //Order
        Route::get('/order', OrderIndex::class)->name('order.index');
        Route::get('/order/{order}', OrderDetails::class)->name('order.details');
        //Transaction
        Route::get('/transaction',TransactionIndex::class)->name('transaction.index');
        //Student
        Route::get('/student',StudentIndex::class)->name('student.index');
        Route::get('/student/{student}/plan',StudentPlan::class)->name('student.plan');
        Route::get('/student/{student}/reportMonthly',StudentReportMonthly::class)->name('student.report');
        Route::get('/student/{student}/information',StudentInformation::class)->name('student.information');

        //coupon
        Route::get('/coupon',CouponIndex::class)->name('coupon.index');

        //Admin
        Route::get('/adminUser',AdminIndex::class)->name('admin.index');

    });

});
