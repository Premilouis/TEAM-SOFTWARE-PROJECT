<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // For index page
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
            'name'=>'required',
            'level'=>'required',
            'num_of_credits'=>'required',
            
        ]);

        $course = new Course([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'level' => $request->get('level'),
            'num_of_credits' => $request->get('num_of_credits'),
            
        ]);
        $course->save();
        return redirect('/courses')->with('success', 'Course saved!');
    }

    public function create()
    {
        return view('courses.create');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code'=>'required',
            'name'=>'required',
            'level'=>'required',
            'num_of_credits'=>'required',
            
        ]);

        $course = Course::find($id);
        $course->code =  $request->get('code');
        $course->name =  $request->get('name');
        $course->level =  $request->get('level');
        $course->num_of_credits =  $request->get('num_of_credits');
        
        $course->save();

        return redirect('/courses')->with('success', 'Course updated!');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('/courses')->with('success', 'Course deleted!');
    }
}
