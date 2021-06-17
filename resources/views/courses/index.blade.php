@extends('layout/admin')

@section('title')
    Courses 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Courses</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createcourses') }}" class="btn btn-primary">New Course</a>
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
            <td>CODE</td>
            <td>NAME</td>
            <td>LEVEL</td>
            <td>NUM OF CREDITS</td>
                <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->code}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->level}}</td>
                <td>{{$course->num_of_credits}}</td>

                <td>
                <a href="{{ route('editcourses', ['id' => $course->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deletecourses', ['id' => $course->id]) }}" method="post">
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
