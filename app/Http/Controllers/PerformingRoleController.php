<?php

namespace App\Http\Controllers;

use App\Models\PerformingRole;
use App\Models\User;
use App\Models\Action;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerformingRoleController extends Controller
{
   // For index page
   public function index()
   {
       $performingroles = DB::table('performing_roles')
        ->leftJoin('users','performing_roles.user_id',"=",'users.id')
        ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
        ->select('performing_roles.id','users.email as userEmail','actions.name as actionName')
        ->get();

       return view('performingroles.index', compact('performingroles'));
   }
   public function store(Request $request)
   {
       $request->validate([
           
           'user_id'=>'required',
           'action_id'=>'required',
           
       ]);

       $performingrole = new PerformingRole([
           
           'user_id' => $request->get('user_id'),
           'action_id' => $request->get('action_id'),
           
       ]);
       $performingrole->save();
       return redirect('/performingroles')->with('success', 'PerformingRole saved!');
   }

   public function create()
   {
       //return view('exams.create');
       $user = User::all();
       $action = Action::all();
       return view('performingroles.create')->with('user',$user)->with('action',$action);
   }

   public function edit($id)
   {
       $performingrole = PerformingRole::find($id);
       $user = User::all();
       $action = Action::all();
       return view('performingroles.edit', compact('performingrole'))->with('user',$user)->with('action',$action);
   }

   public function update(Request $request, $id)
   {
       $request->validate([
           
           'user_id'=>'required',
           'action_id'=>'required',
           
       ]);


       $performingrole = PerformingRole::find($id);
       
       $performingrole->user_id =  $request->get('user_id');
       $performingrole->action_id =  $request->get('action_id');

       
       $performingrole->save();

       return redirect('/performingroles')->with('success', 'PerformingRole updated!');
   }

   public function destroy($id)
   {
       $performingrole = PerformingRole::find($id);
       $performingrole->delete();

       return redirect('/performingroles')->with('success', 'PerformingRole deleted!');
   }
}
