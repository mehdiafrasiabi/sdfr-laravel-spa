<?php
use App\Livewire\Client\AboutUs\Index as AboutUs;
use App\Livewire\Client\ContactUs\Index as ContactUs;
use App\Livewire\Client\Home\Index as HomeIndex;
use App\Livewire\Client\Terms\Index as RuleIndex;
use App\Livewire\Client\Auth\Index as AuthIndex;
use App\Livewire\Client\Product\Index as ProductIndex;
use App\Livewire\Client\Cart\Index as CartIndex;
use App\Livewire\Client\Payment\callback as PaymentCallback;
use App\Livewire\Client\Profile\Dashboard as ProfileDashboard;
use App\Livewire\Client\Profile\Notifications as ProfileNotifications;
use App\Livewire\Client\Profile\Wishlist as ProfileWishlist;
use App\Livewire\Client\Profile\Edit as ProfileEdit;
use App\Livewire\Client\Profile\Ticket\Index as ProfileTicketIndex;
use App\Livewire\Client\Profile\Financial as ProfileFinancial;
use App\Livewire\Client\Profile\Barnameh as ProfilePlan;
use App\Livewire\Client\Profile\PersonalInformation as ProfilePersonalInformation;
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
        Route::get('/checkout/cart',CartIndex::class)->name('checkout.cart');
        Route::get('/logout', [AuthIndex::class,'clientLogout'])->name('logout');
        Route::get('/payment/callback',PaymentCallback::class)->name('payment.callback');

        //Profile
        Route::get('/profile-dashboard',ProfileDashboard::class)->name('profile.dashboard');
        Route::get('/profile-notification',ProfileNotifications::class)->name('profile.notification');
        Route::get('/profile-wishlist',ProfileWishlist::class)->name('profile.wishlist');
        Route::get('/profile-edit',ProfileEdit::class)->name('profile.edit');
        Route::get('/profile-ticket',ProfileTicketIndex::class)->name('profile.ticket.index');
        Route::get('/profile-financial',ProfileFinancial::class)->name('profile.financial.index');
        Route::get('/profile-plan',ProfilePlan::class)->name('profile.plan.index');
        Route::get('/profile-personalInformation',ProfilePersonalInformation::class)->name('profile.personal');
    });
});
