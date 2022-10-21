<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index () {
        return view('website-pages.services.index');
    }
}
