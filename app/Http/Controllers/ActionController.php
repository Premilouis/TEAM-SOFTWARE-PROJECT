<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    // For index page
    public function index()
    {
        $actions = Action::all();
        return view('actions.index', compact('actions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            
        ]);

        $action = new Action([
            'name' => $request->get('name'),
            
        ]);
        $action->save();
        return redirect('/actions')->with('success', 'Action saved!');
    }

    public function create()
    {
        return view('actions.create');
    }

    public function edit($id)
    {
        $action = Action::find($id);
        return view('actions.edit', compact('action'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            
        ]);

        $action = Action::find($id);
        $action->name =  $request->get('name');
        
        $action->save();

        return redirect('/actions')->with('success', 'Action updated!');
    }

    public function destroy($id)
    {
        $action = Action::find($id);
        $action->delete();

        return redirect('/actions')->with('success', 'Action deleted!');
    }
}
