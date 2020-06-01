<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function indexcaboutus(){

        return view('aboutus');
    }
}
