<?php

namespace App\Http\Controllers;

use App\Models\ExamType;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{
    // For index page
    public function index()
    {
        $examtypes = ExamType::all();

        return view('examtypes.index', compact('examtypes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            
        ]);

        $usertype = new ExamType([
            'type' => $request->get('type'),
            
        ]);
        $usertype->save();
        return redirect('/examtypes')->with('success', 'ExamType saved!');
    }

    public function create()
    {
        return view('examtypes.create');
    }

    public function edit($id)
    {
        $examtype = ExamType::find($id);
        return view('examtypes.edit', compact('examtype'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type'=>'required',
            
        ]);

        $examtype = ExamType::find($id);
        $examtype->type =  $request->get('type');
        
        $examtype->save();

        return redirect('/examtypes')->with('success', 'ExamType updated!');
    }

    public function destroy($id)
    {
        $examtype = ExamType::find($id);
        $examtype->delete();

        return redirect('/examtypes')->with('success', 'ExamType deleted!');
    }
}
