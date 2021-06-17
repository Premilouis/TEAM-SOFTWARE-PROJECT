<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use App\Models\Exam;
use App\Models\Price;
use App\Models\PerformingRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class PaymentController extends Controller
{
   // For index page
   public function index()
   {

       $payments = DB::table('payments')
       
       ->leftJoin('users','payments.user_id',"=",'users.id')
       ->leftJoin('exams','payments.exam_id',"=",'exams.id')
       ->leftJoin('prices','payments.price_id',"=",'prices.id')
       ->leftJoin('performing_roles','payments.performing_role_id',"=",'performing_roles.id')
       ->select('payments.id','payments.date','payments.amount','users.id as userId','exams.id as examId','prices.id as priceId','performing_roles.id as performingRoleId')
       ->get();
       //dd($payments);
       
       
       return view('payments.index', compact('payments'));
   }
   public function store(Request $request)
   {
       $request->validate([
           'date'=>'required',
           'amount'=>'required',
           'user_id'=>'required',
           'exam_id'=>'required',
           'price_id'=>'required',
           'performing_role_id'=>'required',
           
       ]);

       $payment = new Payment([
           'date' => $request->get('date'),
           'amount' => $request->get('amount'),
           'user_id' => $request->get('user_id'),
           'exam_id' => $request->get('exam_id'),
           'price_id' => $request->get('price_id'),
           'performing_role_id' => $request->get('performing_role_id'),
       ]);
       $payment->save();
       return redirect('/payments')->with('success', 'Payment saved!');
   }

   public function create()
   {
       $user = User::all();
       $exam = Exam::all();
       $price = Price::all();
       $performingrole = PerformingRole::all();
       return view('payments.create')->with('user',$user)->with('exam',$exam)->with('price',$price)->with('performingrole',$performingrole);
   }

   public function edit($id)
   {
       $payment = Payment::find($id);
       $user = User::all();
       $exam = Exam::all();
       $price = Price::all();
       $performingrole = PerformingRole::all();
       return view('payments.edit', compact('payment'))->with('user',$user)->with('exam',$exam)->with('price',$price)->with('performingrole',$performingrole);
   }

   public function update(Request $request, $id)
   {
    $request->validate([
        'date'=>'required',
        'amount'=>'required',
        'user_id'=>'required',
        'exam_id'=>'required',
        'price_id'=>'required',
        'performing_role_id'=>'required',
        
    ]);

       $payment = Payment::find($id);
       $payment->date =  $request->get('date');
       $payment->amount =  $request->get('amount');
       $payment->user_id =  $request->get('user_id');
       $payment->exam_id =  $request->get('exam_id');
       $payment->price_id =  $request->get('price_id');
       $payment->performing_role_id =  $request->get('performing_role_id');
       $payment->save();

       return redirect('/payments')->with('success', 'Payment updated!');
   }

   public function destroy($id)
   {
       $payment = Payment::find($id);
       $payment->delete();

       return redirect('/payments')->with('success', 'Payment deleted!');
   }
}
