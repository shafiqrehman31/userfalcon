<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
