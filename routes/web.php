<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Common\SettingController;

Route::get('/', function () { return to_route('login'); });

Auth::routes(['register'=>false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::controller(SettingController::class)->group(function () {
        Route::get('settings', 'index')->name('settings');
        Route::get('settings/update-password', 'updatePassword')->name('settings.update-password');
        Route::get('settings/staff-member', 'staffMembers')->name('settings.staff-member');
    });

    Route::prefix('admin')->group(function () {
        Route::view('payments', 'admin.payment.index')->name('payments');
        Route::view('statistics', 'admin.statistics.index')->name('statistics');
        Route::controller(TemplateController::class)->group(function () {
            Route::get('/template','index')->name('template');
        });
        Route::resource('hotels', HotelController::class);
    });

    Route::prefix('supplier')->group(function () {
        Route::view('service/view', 'supplier.service.view')->name('service.view');
        Route::view('payments', 'supplier.payment.index')->name('supplier.payments');
        Route::view('payments/view', 'supplier.payment.view')->name('supplier.payments.view');
    });
});