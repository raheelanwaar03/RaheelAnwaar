<?php

use App\Http\Controllers\LandingPage\LandingPageController;
use Illuminate\Support\Facades\Route;


// Landing Page Routes

Route::get('/',[LandingPageController::class,'landing'])->name('LandingPage');



require __DIR__.'/auth.php';
