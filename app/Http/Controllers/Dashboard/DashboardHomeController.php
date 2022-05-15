<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardHomeController extends Controller
{
    public function index()
    {
        return View::make('dashboard.home');
    }
}
