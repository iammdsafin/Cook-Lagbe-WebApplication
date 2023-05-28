<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookController extends Controller
{
    public function CookDashboard (){
        return view ('cook.cook_dashboard');
    }
}
