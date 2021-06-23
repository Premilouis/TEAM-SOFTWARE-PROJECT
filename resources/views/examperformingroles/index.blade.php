@extends('layout/admin')

@section('title')
    ExamPerformingRoles 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">ExamPerformingRoles</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createexamperformingroles') }}" class="btn btn-primary">New ExamPerformingRole</a>
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
            <td>EXAM NAME</td>
            <td>PERFORMINGROLE NAME</td>
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($examperformingroles as $examperformingrole)
            <tr>
                <td>{{$examperformingrole->id}}</td>
                <td>{{$examperformingrole->courseCode}}_{{$examperformingrole->examKind}}</td>
                <td>{{$examperformingrole->userEmail}}_{{$examperformingrole->actionName}}</td>
                
            <td>
                <a href="{{ route('editexamperformingroles', ['id' => $examperformingrole->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteexamperformingroles', ['id' => $examperformingrole->id]) }}" method="post">
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
