<?php

namespace App\Http\Controllers;

use App\Models\ExamPerformingRole;
use App\Models\Exam;
use App\Models\PerformingRole;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExamPerformingRoleController extends Controller
{
    // For index page
   public function index()
   {

       $examperformingroles = DB::table('exam_performing_roles')
       
       ->leftJoin('exams','exam_performing_roles.exam_id',"=",'exams.id')
       ->leftJoin('performing_roles','exam_performing_roles.performing_role_id',"=",'performing_roles.id')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->select('exam_performing_roles.id','exams.kind as examKind','performing_roles.id as performingRoleId','courses.code as courseCode','users.email as userEmail','actions.name as actionName')
       ->get();
      // dd($examperformingroles);
       

       
       return view('examperformingroles.index', compact('examperformingroles'));
   }
   public function store(Request $request)
   {
       $request->validate([
           'exam_id'=>'required',
           'performing_role_id'=>'required',
           
       ]);

       $examperformingrole = new ExamPerformingRole([
            
           'exam_id' => $request->get('exam_id'),
           'performing_role_id' => $request->get('performing_role_id'),
       ]);
       $examperformingrole->save();
       return redirect('/examperformingroles')->with('success', 'ExamPerformingRole saved!');
   }

   public function create()
   {
        $exam = DB::table('exams')
        ->leftJoin('courses','exams.course_id',"=",'courses.id')
        ->select('exams.*','courses.code as courseCode')
        ->get();

      $performingrole = DB::table('performing_roles')
       ->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->select('performing_roles.*','users.email as userEmail','actions.name as actionName')
       ->get();

       return view('examperformingroles.create')->with('exam',$exam)->with('performingrole',$performingrole);
   }

   public function edit($id)
   {
       $examperformingrole = ExamPerformingRole::find($id);
       
       $exam = DB::table('exams')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->select('exams.*','courses.code as courseCode')
       ->get();
      
       $performingrole = DB::table('performing_roles')
       ->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->select('performing_roles.*','users.email as userEmail','actions.name as actionName')
       ->get();
       return view('examperformingroles.edit', compact('examperformingrole'))->with('exam',$exam)->with('performingrole',$performingrole);
   }

   public function update(Request $request, $id)
   {
    $request->validate([
        'exam_id'=>'required',
        'performing_role_id'=>'required',
        
    ]);

       $examperformingrole = ExamPerformingRole::find($id);
       
       $examperformingrole->exam_id =  $request->get('exam_id');
       $examperformingrole->performing_role_id =  $request->get('performing_role_id');
       $examperformingrole->save();

       return redirect('/examperformingroles')->with('success', 'ExamPerformingRole updated!');
   }

   public function destroy($id)
   {
       $examperformingrole = ExamPerformingRole::find($id);
       $examperformingrole->delete();

       return redirect('/examperformingroles')->with('success', 'ExamPerformingRole deleted!');
   }
}
