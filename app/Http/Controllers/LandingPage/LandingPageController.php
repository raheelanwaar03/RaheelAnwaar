<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
   public function landing()
   {
     return view('LandingPage.welcome');
   }

   public function about()
   {
     return view('LandingPage.aboutMe');
   }

   public function contact()
   {
    return view('LandingPage.contactMe');
   }

}
