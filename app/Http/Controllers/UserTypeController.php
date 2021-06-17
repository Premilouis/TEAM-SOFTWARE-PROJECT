<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UserTypeController extends Controller
{
    // For index page
    public function index()
    {
        $usertypes = UserType::all();

        return view('usertypes.index', compact('usertypes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            
        ]);

        $usertype = new UserType([
            'type' => $request->get('type'),
            
        ]);
        $usertype->save();
        return redirect('/usertypes')->with('success', 'UserType saved!');
    }

    public function create()
    {
        return view('usertypes.create');
    }

    public function edit($id)
    {
        $usertype = UserType::find($id);
        return view('usertypes.edit', compact('usertype'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type'=>'required',
            
        ]);

        $usertype = UserType::find($id);
        $usertype->type =  $request->get('type');
        
        $usertype->save();

        return redirect('/usertypes')->with('success', 'UserType updated!');
    }

    public function destroy($id)
    {
        $usertype = UserType::find($id);
        $usertype->delete();

        return redirect('/usertypes')->with('success', 'UserType deleted!');
    }
}
