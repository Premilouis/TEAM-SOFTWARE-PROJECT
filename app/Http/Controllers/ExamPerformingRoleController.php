<?php

namespace App\Http\Controllers;

use App\Models\ExamPerformingRole;
use App\Models\Exam;
use App\Models\PerformingRole;
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
       ->select('exam_performing_roles.id','exams.id as examId','performing_roles.id as performingRoleId')
       ->get();
       //dd($examperformingroles);
       
       
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
       $exam = Exam::all();
       $performingrole = PerformingRole::all();
       return view('examperformingroles.create')->with('exam',$exam)->with('performingrole',$performingrole);
   }

   public function edit($id)
   {
       $examperformingrole = ExamPerformingRole::find($id);
       $exam = Exam::all();
       $performingrole = PerformingRole::all();
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
