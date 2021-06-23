<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // For index page
    public function index()
    {
        
        $users = DB::table('users')
        ->leftJoin('user_types','users.user_type_id',"=",'user_types.id')
        ->select('users.*','user_types.type as userType')
        ->get();

        return view('users.index', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_name'=>'required',
            'email'=>'required|email|unique:users',
            'name'=>'required',
            //'last_name'=>'required',
            //'mobile'=>'required',
            'bank_acc_num'=>'required',
            'bank_name'=>'required',
            //'nic_num'=>'required',
            //'designation'=>'required',
            'password'=>'required|AlphaNum|min:5',
            'user_type_id'=>'required',
            
        ]);

        $user = new User([
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            //'last_name' => $request->get('last_name'),
            'mobile' => $request->get('mobile'),
            'bank_acc_num' => $request->get('bank_acc_num'),
            'bank_name' => $request->get('bank_name'),
            'nic_num' => $request->get('nic_num'),
            'designation' => $request->get('designation'),
            'password' => Hash::make($request->get('password')),
            'user_type_id' => $request->get('user_type_id'),
            
        ]);
        $user->save();
        return redirect('/users')->with('success', 'User saved!');
    }

    public function create()
    {
        //return view('users.create');
        $usertype = UserType::all();
        return view('users.create')->with('usertype',$usertype);
    }

    public function edit($id)
    {

        $user = User::find($id);
        $usertype = UserType::all();
        return view('users.edit', compact('user'))->with('usertype',$usertype);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_name'=>'required',
            'email'=>'required|email',
            'name'=>'required',
            //'last_name'=>'required',
            //'mobile'=>'required',
            'bank_acc_num'=>'required',
            'bank_name'=>'required',
            //'nic_num'=>'required',
            //'designation'=>'required',
            'user_type_id'=>'required',
            //'password'=>'required|AlphaNum|min:5',
            
            
        ]);


        $user = User::find($id);
        $user->user_name =  $request->get('user_name');
        $user->email =  $request->get('email');
        $user->name =  $request->get('name');
        //$user->last_name =  $request->get('last_name');
        $user->mobile =  $request->get('mobile');
        $user->bank_acc_num =  $request->get('bank_acc_num');
        $user->bank_name =  $request->get('bank_name');
        $user->nic_num =  $request->get('nic_num');
        $user->designation =  $request->get('designation');
        $user->user_type_id =  $request->get('user_type_id');
        //$user->password =  $request->get('password');
        

        
        $user->save();

        return redirect('/users')->with('success', 'User updated!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted!');
    }
}
