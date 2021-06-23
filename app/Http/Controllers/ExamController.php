<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamType;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    // For index page
    public function index()
    {
        $exams = DB::table('exams')
        ->leftJoin('courses','exams.course_id',"=",'courses.id')
        ->leftJoin('exam_types','exams.exam_type_id',"=",'exam_types.id')
        ->select('exams.*','exam_types.type as examType','courses.code as courseCode')
        ->get();

        return view('exams.index', compact('exams'));
    }
    public function store(Request $request)
    {
        $request->validate([
           
            'start_time'=>'required',
            'end_time'=>'required',
            'date'=>'required',
           
            'exam_type_id'=>'required',
            'course_id'=>'required',
            
        ]);

        $exam = new Exam([
            'duration' => $request->get('duration'),
            'num_of_students' => $request->get('num_of_students'),
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time'),
            'date' => $request->get('date'),
            'kind' => $request->get('kind'),
            'num_of_pages' => $request->get('num_of_pages'),
            'num_of_groups' => $request->get('num_of_groups'),
            'exam_type_id' => $request->get('exam_type_id'),
            'course_id' => $request->get('course_id'),
            
        ]);
        $exam->save();
        return redirect('/exams')->with('success', 'Exam saved!');
    }

    public function create()
    {
        //return view('exams.create');
        $examtype = ExamType::all();
        $course = Course::all();
        return view('exams.create')->with('examtype',$examtype)->with('course',$course);
    }

    public function edit($id)
    {
        
        $exam = Exam::find($id);
        $course = Course::all();
        $examtype = ExamType::all();
    
        return view('exams.edit', compact('exam'))->with('course',$course)->with('examtype',$examtype);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'start_time'=>'required',
            'end_time'=>'required',
            'date'=>'required',
            
            'exam_type_id'=>'required',
            'course_id'=>'required',
            
        ]);


        $exam = Exam::find($id);
        $exam->duration =  $request->get('duration');
        $exam->num_of_students =  $request->get('num_of_students');
        $exam->start_time =  $request->get('start_time');
        $exam->end_time =  $request->get('end_time');
        $exam->date =  $request->get('date');
        $exam->kind =  $request->get('kind');
        $exam->num_of_pages =  $request->get('num_of_pages');
        $exam->num_of_groups =  $request->get('num_of_groups');
        $exam->exam_type_id =  $request->get('exam_type_id');
        $exam->course_id =  $request->get('course_id');

        
        $exam->save();

        return redirect('/exams')->with('success', 'Exam updated!');
    }

    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();

        return redirect('/exams')->with('success', 'Exam deleted!');
    }
}
