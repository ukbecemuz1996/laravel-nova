<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('website-pages.portfolios.index');
    }

    public function read($id) {
        return view('website-pages.portfolio-details.index');
    }
}
