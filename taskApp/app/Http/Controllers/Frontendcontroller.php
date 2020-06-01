<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function indexaboutus(){

        return view('aboutus');
    }

    public function indexcontactus(){

        return view('contactus');
    }
}
