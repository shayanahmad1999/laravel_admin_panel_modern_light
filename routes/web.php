<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
})->name('admin.login');

Route::get('/signup', function () {
    return view('auth/signup');
})->name('admin.signup');

Route::get('/forgot-password', function () {
    return view('auth/forgotPassword');
})->name('admin.forgotPassword');

Route::get('/reset-password', function () {
    return view('auth/resetPassword');
})->name('admin.resetPassword');

Route::get('/lock-screen', function () {
    return view('auth/lockScreen');
})->name('admin.lockScreen');

Route::get('/profile', function () {
    return view('auth/profile');
})->name('admin.profile');

Route::get('/edit-profile', function () {
    return view('auth/editProfile');
})->name('admin.editProfile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/modal', function () {
    return view('components/modal');
})->name('admin.modal');

Route::get('/card', function () {
    return view('components/card');
})->name('admin.card');

Route::get('/carousal', function () {
    return view('components/carousal');
})->name('admin.carousal');

Route::get('/sweetAlert', function () {
    return view('components/sweetAlert');
})->name('admin.sweetAlert');

Route::get('/notification', function () {
    return view('components/notification');
})->name('admin.notification');

Route::get('/pricing-table', function () {
    return view('components/pricingTable');
})->name('admin.pricingTable');

Route::get('/basic-table', function () {
    return view('tables/basic');
})->name('admin.basicTable');

Route::get('/basic-data-table', function () {
    return view('tables/basicData');
})->name('admin.basicDataTable');

Route::get('/custom-data-table', function () {
    return view('tables/customData');
})->name('admin.customDataTable');

Route::get('/range-search-data-table', function () {
    return view('tables/rangeSearchData');
})->name('admin.rangeSearchDataTable');

Route::get('/HTML5-export-table', function () {
    return view('tables/html5ExportData');
})->name('admin.html5ExportDataTable');

Route::get('basic-form', function () {
    return view('forms/basic');
})->name('admin.basicForm');

Route::get('input-group-form', function () {
    return view('forms/inputGroup');
})->name('admin.inputGroup');

Route::get('layouts-form', function () {
    return view('forms/layouts');
})->name('admin.layouts');

Route::get('validation-form', function () {
    return view('forms/validation');
})->name('admin.validation');

Route::get('input-mask-form', function () {
    return view('forms/inputMask');
})->name('admin.inputMask');

Route::get('select2-form', function () {
    return view('forms/select2');
})->name('admin.select2');

Route::get('switches-form', function () {
    return view('forms/switches');
})->name('admin.switches');

Route::get('wizards-form', function () {
    return view('forms/wizards');
})->name('admin.wizards');
