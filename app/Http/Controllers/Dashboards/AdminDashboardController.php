<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.admindashboard');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }
}
