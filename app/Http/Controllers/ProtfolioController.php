<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.home.index');
    }
}
