<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HODDashboardController extends Controller
{
    public function index()
    {
        return view('hod.hoddashboard');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:HOD');
    }
}
