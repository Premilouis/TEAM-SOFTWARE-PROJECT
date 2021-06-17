<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    // For index page
    public function index()
    {
        $userroles = DB::table('user_roles')
        
        ->leftJoin('users','user_roles.user_id',"=",'users.id')
        ->leftJoin('roles','user_roles.role_id',"=",'roles.id')
        ->select('user_roles.id','users.email as userEmail','roles.type as roleType')
        ->get();

        return view('userroles.index', compact('userroles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            
            'user_id'=>'required',
            'role_id'=>'required',
            
        ]);

        $userrole = new UserRole([
            
            'user_id' => $request->get('user_id'),
            'role_id' => $request->get('role_id'),
            
        ]);
        $userrole->save();
        return redirect('/userroles')->with('success', 'UserRole saved!');
    }

    public function create()
    {
        //return view('exams.create');
        $user = User::all();
        $role = Role::all();
        return view('userroles.create')->with('user',$user)->with('role',$role);
    }

    public function edit($id)
    {
        $userrole = UserRole::find($id);
        $user = User::all();
        $role = Role::all();
        
        return view('userroles.edit', compact('userrole'))->with('user',$user)->with('role',$role);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'user_id'=>'required',
            'role_id'=>'required',
            
        ]);


        $userrole = UserRole::find($id);
        
        $userrole->user_id =  $request->get('user_id');
        $userrole->role_id =  $request->get('role_id');

        
        $userrole->save();

        return redirect('/userroles')->with('success', 'UserRole updated!');
    }

    public function destroy($id)
    {
        $userrole = UserRole::find($id);
        $userrole->delete();

        return redirect('/userroles')->with('success', 'UserRole deleted!');
    }
}
