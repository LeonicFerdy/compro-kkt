<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function user()
    {
        return view('dashboard.user');
    }
    public function berita()
    {
        return view('dashboard.berita');
    }
}
