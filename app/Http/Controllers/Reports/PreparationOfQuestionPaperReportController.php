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


       /*$users = DB::table('users')
       ->leftJoin('performing_roles','performing_roles.user_id',"=",'users.id')
       ->leftJoin('exam_performing_roles','exam_performing_roles.performing_role_id',"=",'exam_performing_roles.id')
       ->leftJoin('exams','exam_performing_roles.exam_id',"=",'exams.id')
       ->leftJoin('user_types','users.user_type_id',"=",'user_types.id')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->select('users.first_name','users.last_name','users.designation','users.nic_num','user_types.type as usertype','courses.code as coursecode')
       ->get();*/

       /*$users = DB::table('users')
       ->leftJoin('payments','payments.user_id',"=",'users.id')
       ->leftJoin('exams','payments.exam_id',"=",'exams.id')
       ->leftJoin('prices','payments.price_id',"=",'prices.id')
       ->leftJoin('performing_roles','payments.performing_role_id',"=",'performing_roles.id')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->leftJoin('user_types','users.user_type_id',"=",'user_types.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->select('users.first_name','users.last_name','users.designation','users.nic_num','user_types.type as usertype','courses.code as coursecode')
       ->get();*/

       $users = DB::table('users')
       ->leftJoin('performing_roles','performing_roles.user_id',"=",'users.id')
       ->leftJoin('exam_performing_roles','exam_performing_roles.performing_role_id',"=",'exam_performing_roles.id')
       //->leftJoin('exams','exam_performing_roles.exam_id',"=",'exams.id')
       ->leftJoin('user_types','users.user_type_id',"=",'user_types.id')
       //->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->select('users.first_name','users.last_name','users.designation','users.nic_num','user_types.type as usertype')
       //->where('exam_performing_roles.id',"=",'users.exam_performing_role_id')
       ->get();


       //dd($users);
       
       $exams = DB::table('exams')
       ->leftJoin('exam_performing_roles','exam_performing_roles.exam_id',"=",'exams.id')
       ->leftJoin('performing_roles','exam_performing_roles.performing_role_id',"=",'performing_roles.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->leftJoin('exam_types','exams.exam_type_id',"=",'exam_types.id')
       ->select('courses.code as coursecode','exam_types.type as examtype','actions.name as actionname','exams.duration as examduration')
       ->get();
       
       //dd($exams);
       return view('preparationofquestionpapers.index', compact('users','exams'));
   }
    
}
