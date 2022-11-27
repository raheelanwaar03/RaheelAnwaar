<?php

use App\Http\Controllers\LandingPage\LandingPageController;
use Illuminate\Support\Facades\Route;


// Landing Page Routes

Route::get('/',[LandingPageController::class,'landing'])->name('LandingPage');
Route::get('/About-Me',[LandingPageController::class,'about'])->name('LandingPage.About');
Route::get('/Contact-Me',[LandingPageController::class,'contact'])->name('LandingPage.contact');



require __DIR__.'/auth.php';
