<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
}
