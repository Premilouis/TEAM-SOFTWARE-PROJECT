<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExaminerDashboardController extends Controller
{
    public function index()
    {
        return view('examiner.examinerdashboard');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Examiner');
    }
}
