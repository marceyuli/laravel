<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/crear','PortfolioController@create')->name('portfolio.create');

Route::post('/portfolio','PortfolioController@store')->name('portfolio.store');

Route::get('/portfolio/{project}','PortfolioController@show')->name('portfolio.show');
Route::get('/portfolio/{project}/editar','PortfolioController@edit')->name('portfolio.edit');
Route::patch('/portfolio/{project}','PortfolioController@update')->name('portfolio.update');

Route::delete('portfolio/{project}','PortfolioController@destroy')->name('portfolio.destroy');

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessagesController@store');