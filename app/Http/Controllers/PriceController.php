<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\UserType;
use App\Models\ExamType;
use App\Models\Action;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    // For index page
    public function index()
    {

        $prices = DB::table('prices')
        
        ->leftJoin('user_types','prices.user_type_id',"=",'user_types.id')
        ->leftJoin('exam_types','prices.exam_type_id',"=",'exam_types.id')
        ->leftJoin('actions','prices.action_id',"=",'actions.id')
        ->select('prices.*','user_types.type as userType','exam_types.type as examType','actions.name as actionName')
        ->get();
        //dd($prices);
        
        
        return view('prices.index', compact('prices'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'unit'=>'required',
            'price'=>'required',
            'user_type_id'=>'required',
            'exam_type_id'=>'required',
            'action_id'=>'required',
            
        ]);

        $price = new Price([
            'unit' => $request->get('unit'),
            'price' => $request->get('price'),
            'user_type_id' => $request->get('user_type_id'),
            'exam_type_id' => $request->get('exam_type_id'),
            'action_id' => $request->get('action_id'),
            
        ]);
        $price->save();
        return redirect('/prices')->with('success', 'Price saved!');
    }

    public function create()
    {
        $usertype = UserType::all();
        $examtype = ExamType::all();
        $action = Action::all();
        return view('prices.create')->with('usertype',$usertype)->with('examtype',$examtype)->with('action',$action);
    }

    public function edit($id)
    {
        $price = Price::find($id);
        $usertype = UserType::all();
        $examtype = ExamType::all();
        $action = Action::all();
        return view('prices.edit', compact('price'))->with('usertype',$usertype)->with('examtype',$examtype)->with('action',$action);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'unit'=>'required',
            'price'=>'required',
            'user_type_id'=>'required',
            'exam_type_id'=>'required',
            'action_id'=>'required',
            
        ]);

        $price = Price::find($id);
        $price->unit =  $request->get('unit');
        $price->price =  $request->get('price');
        $price->user_type_id =  $request->get('user_type_id');
        $price->exam_type_id =  $request->get('exam_type_id');
        $price->action_id =  $request->get('action_id');
        $price->save();

        return redirect('/prices')->with('success', 'Price updated!');
    }

    public function destroy($id)
    {
        $price = Price::find($id);
        $price->delete();

        return redirect('/prices')->with('success', 'Price deleted!');
    }
}
