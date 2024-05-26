<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about.about');
})->name('about');

Route::get('/blog', function () {
    return view('pages.blog.blog');
})->name('blog');

Route::get('/blog-upaya', function () {
    return view('pages.blog.blog-upaya');
})->name('blog-upaya');

Route::get('/blog-detail', function () {
    return view('pages.blog.blog-detail');
})->name('blog-detail');

Route::get('/contact', function () {
    return view('pages.contact.contact');
})->name('contact');

Route::get('/thanks', function () {
    return view('pages.contact.thanks');
})->name('thanks');

Route::get('/event', function () {
    return view('pages.event.event');
})->name('event');

Route::get('/event-detail', function () {
    return view('pages.event.event-detail');
})->name('event-detail');

Route::get('/event-register', function () {
    return view('pages.event.event-register');
})->name('event.register');

Route::get('/login', function () {
    return view('pages.login.login');
})->name('login');

Route::get('/eamil-confirm', function () {
    return view('pages.login.email-confirm');
})->name('email-confirm');

Route::get('/profile', function () {
    return view('pages.profile.profile');
})->name('profile');

Route::get('/profile-edit', function () {
    return view('pages.profile.profile-edit');
})->name('profile-edit');

Route::get('/forgot-password', function () {
    return view('pages.profile.forgot-password');
})->name('forgot-password');

Route::get('/register', function () {
    return view('pages.register.register');
})->name('register');
