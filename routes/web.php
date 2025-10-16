<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/services', 'pages.services')->name('services');
Route::view('/sectors',  'pages.sectors')->name('sectors');
Route::view('/cases',    'pages.cases')->name('cases');
Route::view('/about',    'pages.about')->name('about');
Route::view('/contact',  'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::view('/partners', 'pages.partners')->name('partners');
Route::get('/admin/messages', function () {
    $messages = \App\Models\ContactMessage::latest()->get();
    return view('admin.messages', compact('messages'));
})->name('admin.messages');
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    app()->setLocale($locale);
    return redirect()->back();
})->name('lang.switch');
Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['ar','en'])) abort(400);
    session(['locale' => $locale]);
    app()->setLocale($locale);
    return back();
})->name('lang.switch');
