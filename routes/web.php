<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::any('/', [MainController::class, 'index'])->name('index');
Route::any('/about', [MainController::class, 'about'])->name('about');
Route::any('/about#subscribe', [MainController::class, 'about'])->name('subscribe');
Route::get('/menu', [MainController::class, 'menu'])->name('menu');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::any('/news-detail/{id}', [MainController::class, 'news_detail'])->name('news-detail');
Route::any('/news-detail/{id}#box', [MainController::class, 'news_detail'])->name('detail.box');
Route::any('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::any('/contacts/#form', [MainController::class, 'contacts'])->name('contacts.form');
