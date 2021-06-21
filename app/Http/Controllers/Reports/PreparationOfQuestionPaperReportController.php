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

        
        $payments = DB::table('payments')
        ->leftJoin('users','users.id',"=",'payments.user_id')
        ->leftJoin('user_types','user_types.id',"=",'users.user_type_id')
        ->leftJoin('exams','exams.id',"=",'payments.exam_id')
        ->leftJoin('courses','courses.id',"=",'exams.course_id')
        ->leftJoin('exam_types','exam_types.id',"=",'exams.exam_type_id')
        ->leftJoin('prices','prices.id',"=",'payments.price_id')
        ->leftJoin('performing_roles','performing_roles.id',"=",'payments.performing_role_id')
        ->leftJoin('actions','actions.id',"=",'performing_roles.action_id')
        
        ->select(
            //'payments.id as paymentId',

            //'users.id as userId',
            'users.first_name as userFirstName',
            'users.last_name as userLastName',
            'users.designation as userDesignation',
            'users.nic_num as userNicNum',

            //'user_types.id as userTypeId',
            'user_types.type as userType',

            //'exams.id as examID',
            'exams.duration as examDuration',
            'exams.num_of_pages as examNumOfPages',

            //'courses.id as courseID',
            'courses.code as courseCode',

            //'prices.id as priceID',

            //'exam_types.id as examTypeId',
            'exam_types.type as examType',

            //'performing_roles.id as performingRoleId',

            //'actions.id as actionId',
            'actions.name as actionName'

            )
        ->get();
        //dd($payments);

        return view('preparationofquestionpapers.index', compact('payments'));


        /*$payments = DB::table('payments')
        ->leftJoin('users','users.id',"=",'payments.user_id')
        ->leftJoin('user_types','user_types.id',"=",'users.user_type_id')
        ->leftJoin('exams','exams.id',"=",'payments.exam_id')
        ->leftJoin('courses','courses.id',"=",'exams.course_id')
        ->select(
            'payments.id as paymentId',
            'users.id as userId',
            'users.first_name as userFirstName',
            'user_types.id as userTypeId',
            'exams.id as examID',
            'exams.duration as examDuration',
            'courses.id as courseID'
            )
        ->get();
        dd($payments);*/



         /*foreach ($payments as $payment)
         { 
            // Code Here 
            
            
            $user = DB::table('users')
            ->leftJoin('user_types','user_types.id',"=",'users.user_type_id')
            ->get();
            dd($user);

            $usertype = DB::table('user_types')
            ->where('id', '=', $user->user_type_id)
            ->get();
            dd($usertype);
        }*/


       
   }
    
}
