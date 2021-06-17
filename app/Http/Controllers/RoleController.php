<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // For index page
    public function index()
    {
        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            
        ]);

        $role = new Role([
            'type' => $request->get('type'),
            
        ]);
        $role->save();
        return redirect('/roles')->with('success', 'role saved!');
    }

    public function create()
    {
        return view('roles.create');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type'=>'required',
            
        ]);

        $role = Role::find($id);
        $role->type =  $request->get('type');
        
        $role->save();

        return redirect('/roles')->with('success', 'Role updated!');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect('/roles')->with('success', 'Role deleted!');
    }
}
