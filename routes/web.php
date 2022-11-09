<?php

use App\Http\Controllers\LandingPage\LandingPageController;
use Illuminate\Support\Facades\Route;


// Landing Page Routes

Route::get('/',[LandingPageController::class,'landing'])->name('LandingPage');
Route::get('/About-me',[LandingPageController::class,'about'])->name('LandingPage.About');



require __DIR__.'/auth.php';
