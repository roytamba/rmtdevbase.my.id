<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('portfolio.page'); })->name('welcome');
Route::get('/resume', function () { return view('portfolio.resume'); })->name('resume');
Route::get('/projects', function () { return view('portfolio.projects'); })->name('projects');
Route::get('/contact', function () { return view('portfolio.contact'); })->name('contact');
Route::get('/download/my-cv', [WelcomeController::class, 'downloadCv'])->name('download.cv');