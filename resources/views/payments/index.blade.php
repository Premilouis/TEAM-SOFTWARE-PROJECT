@extends('layout/admin')

@section('title')
    Payments 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Payments</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createpayments') }}" class="btn btn-primary">New Payment</a>
    </div>  
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>
  <table class="table table-striped">
  <thead>
            <tr>
            <td>ID</td>
            <td>USER EMAIL</td>
            <td>EXAM NAME</td>
            <td>PRICE DESCRIPTION</td>
            <td>PERFORMINGROLE NAME</td>
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{$payment->id}}</td>
                
                <td>{{$payment->userEmail}}</td>
                <td>{{$payment->courseCode}}_{{$payment->examKind}}</td>
                <td>{{$payment->priceUnit}}_{{$payment->userType}}_{{$payment->examType}}_{{$payment->actionName}}</td>
                <td>{{$payment->userEmail}}_{{$payment->actionName}}</td>
                
            <td>
                <a href="{{ route('editpayments', ['id' => $payment->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deletepayments', ['id' => $payment->id]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
                
                
            </tr>
            @endforeach
        </tbody>
  </table>
<div>

</div>
@endsection

  

@section('scripts')
    
@endsection
