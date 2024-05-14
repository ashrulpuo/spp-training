<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function graph()
    {
        return view('dashboard');
    }
}
