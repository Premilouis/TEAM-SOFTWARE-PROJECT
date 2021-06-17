@extends('layout/admin')

@section('title')
    Edit Payment
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Payment</h1>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('updatepayments', ['id' => $payment->id]) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" value={{ $payment->date }} />
            </div>
            <div class="form-group">

                <label for="amount">Amount:</label>
                <input type="text" class="form-control" name="amount" value={{ $payment->amount }} />
            </div>
            
                <div class="form-group">
                <label for="user_id">User ID:</label>  
                <select class="form-control" name="user_id" value={{ $payment->id }} >
                @foreach ($user as $u)
                <option value="{{$u->id}}" {{ $u->id == $payment->user_id ? 'selected' : ''}}>{{$u->id}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label for="exam_id">Exam ID:</label>  
                <select class="form-control" name="exam_id" value={{ $payment->id }} >
                @foreach ($exam as $e)
                <option value="{{$e->id}}" {{ $e->id == $payment->exam_id ? 'selected' : ''}}>{{$e->id}}</option>
                @endforeach
                </select>
                </div>  

                <div class="form-group">
                <label for="price_id">Price ID:</label>  
                <select class="form-control" name="price_id" value={{ $payment->id }} >
                @foreach ($price as $p)
                <option value="{{$p->id}}" {{ $p->id == $payment->price_id ? 'selected' : ''}}>{{$p->id}}</option>
                @endforeach
                </select>
                </div>  

                <div class="form-group">
                <label for="performing_role_id">PerformingRole ID:</label>  
                <select class="form-control" name="performing_role_id" value={{ $payment->id }} >
                @foreach ($performingrole as $pr)
                <option value="{{$pr->id}}" {{ $pr->id == $payment->performing_role_id ? 'selected' : ''}}>{{$pr->id}}</option>
                @endforeach
                </select>
                </div>  

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
     </div>
    </div>
</div>
    

@endsection



@section('scripts')

@endsection
