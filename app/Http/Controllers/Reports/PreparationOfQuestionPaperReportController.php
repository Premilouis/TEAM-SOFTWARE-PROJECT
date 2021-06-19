<?php

namespace App\Http\Controllers\Reports;

use App\Models\Payment;
use App\Models\User;
use App\Models\Exam;
use App\Models\Course;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreparationOfQuestionPaperReportController extends Controller
{
    // For index page
   public function index()
   {


       $users = DB::table('users')
       ->leftJoin('payments','payments.user_id',"=",'users.id')
       ->leftJoin('exams','payments.exam_id',"=",'exams.id')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->select('users.*','exams.*','courses.*')
       ->get();
       //dd($users);
       
       
       return view('preparationofquestionpapers.index', compact('users'));
   }
    
}
