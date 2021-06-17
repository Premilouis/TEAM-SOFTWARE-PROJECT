@extends('layout/admin')

@section('title')
    ExamTypes 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">ExamTypes</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createexamtypes') }}" class="btn btn-primary">New ExamType</a>
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
            <td>Type</td>
                <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($examtypes as $examtype)
            <tr>
                <td>{{$examtype->id}}</td>
                <td>{{$examtype->type}}</td>
                <td>
                <a href="{{ route('editexamtypes', ['id' => $examtype->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteexamtypes', ['id' => $examtype->id]) }}" method="post">
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
