<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route:: resource('portfolio','PortfolioController')->names('portfolio')->parameters(['portfolio'=>'project']);

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessagesController@store');