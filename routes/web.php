<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('resume', [ResumeController::class, 'index'])->name('resume');
Route::get('project', [ProjectController::class, 'index'])->name('project');
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contact/confirmation', [ContactController::class, 'confirmation'])->name('contact.confirmation');