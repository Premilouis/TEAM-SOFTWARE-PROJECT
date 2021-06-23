@extends('layout/admin')

@section('title')
    Prices 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Prices</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createprices') }}" class="btn btn-primary">New Price</a>
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
            <td>DESCRIPTION</td>
            <td>UNIT</td>
            <td>PRICE</td>
            <td>USER TYPE</td>
            <td>EXAM TYPE</td>
            <td>ACTION NAME</td>
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($prices as $price)
            <tr>
                <td>{{$price->id}}</td>
                <td>{{$price->unit}}_{{$price->userType}}_{{$price->examType}}_{{$price->actionName}}</td>
                <td>{{$price->unit}}</td>
                <td>{{$price->price}}</td>
                <td>{{$price->userType}}</td>
                <td>{{$price->examType}}</td>
                <td>{{$price->actionName}}</td>
                
            <td>
                <a href="{{ route('editprices', ['id' => $price->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteprices', ['id' => $price->id]) }}" method="post">
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
