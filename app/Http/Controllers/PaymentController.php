<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use App\Models\Exam;
use App\Models\Price;
use App\Models\UserType;
use App\Models\ExamType;
use App\Models\Course;
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
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->leftJoin('prices','payments.price_id',"=",'prices.id')
       ->leftJoin('performing_roles','payments.performing_role_id',"=",'performing_roles.id')
       //->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('actions','prices.action_id',"=",'actions.id')
       ->leftJoin('user_types','prices.user_type_id',"=",'user_types.id')
       ->leftJoin('exam_types','prices.exam_type_id',"=",'exam_types.id')
       //->where('prices.action_id',"=",'performing_roles.action_id')
       ->select('payments.id','exams.kind as examKind','prices.unit as priceUnit','performing_roles.id as performingRoleId','courses.code as courseCode','users.email as userEmail','actions.name as actionName','exam_types.type as examType','user_types.type as userType')
       
       ->get();
       //dd($payments);
       
       
       return view('payments.index', compact('payments'));
   }
   public function store(Request $request)
   {
       $request->validate([
           //'date'=>'required',
           //'amount'=>'required',
           'user_id'=>'required',
           'exam_id'=>'required',
           'price_id'=>'required',
           'performing_role_id'=>'required',
           
       ]);

       $payment = new Payment([
           //'date' => $request->get('date'),
           //'amount' => $request->get('amount'),
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

       $exam = DB::table('exams')
        ->leftJoin('courses','exams.course_id',"=",'courses.id')
        ->select('exams.*','courses.code as courseCode')
        ->get();

        $price = DB::table('prices')
        ->leftJoin('user_types','prices.user_type_id',"=",'prices.id')
        ->leftJoin('exam_types','prices.exam_type_id',"=",'prices.id')
        ->leftJoin('actions','prices.action_id',"=",'actions.id')
        ->select('prices.*','actions.name as actionName','exam_types.type as examType','user_types.type as userType')
        ->get();

      $performingrole = DB::table('performing_roles')
       ->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->select('performing_roles.*','users.email as userEmail','actions.name as actionName')
       ->get();

       return view('payments.create')->with('user')->with('exam',$exam)->with('price',$price)->with('performingrole',$performingrole);
   }

   public function edit($id)
   {
       $payment = Payment::find($id);

       $user = User::all();

       $exam = DB::table('exams')
       ->leftJoin('courses','exams.course_id',"=",'courses.id')
       ->select('exams.*','courses.code as courseCode')
       ->get();

       $price = DB::table('prices')
        ->leftJoin('user_types','prices.user_type_id',"=",'prices.id')
        ->leftJoin('exam_types','prices.exam_type_id',"=",'prices.id')
        ->leftJoin('actions','prices.action_id',"=",'actions.id')
        ->select('prices.*','actions.name as actionName','exam_types.type as examType','user_types.type as userType')
        ->get();

      $performingrole = DB::table('performing_roles')
       ->leftJoin('users','performing_roles.user_id',"=",'users.id')
       ->leftJoin('actions','performing_roles.action_id',"=",'actions.id')
       ->select('performing_roles.*','users.email as userEmail','actions.name as actionName')
       ->get();

       return view('payments.edit', compact('payment'))->with('user')->with('exam',$exam)->with('price',$price)->with('performingrole',$performingrole);
   }

   public function update(Request $request, $id)
   {
    $request->validate([
        //'date'=>'required',
        //'amount'=>'required',
        'user_id'=>'required',
        'exam_id'=>'required',
        'price_id'=>'required',
        'performing_role_id'=>'required',
        
    ]);

       $payment = Payment::find($id);
       //$payment->date =  $request->get('date');
       //$payment->amount =  $request->get('amount');
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
