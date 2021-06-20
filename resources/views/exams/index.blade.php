@extends('layout/admin')

@section('title')
    Exams 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Exams</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createexams') }}" class="btn btn-primary">New Exam</a>
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
            <td>DURATION</td>
            <td>NUM OF STUDENTS</td>
            <td>START TIME</td>
            <td>END TIME</td>
            <td>DATE</td>
            <td>KIND</td>
            <td>NUM OF PAGES</td>
            <td>NUM OF GROUPS</td>
            <td>EXAM TYPE</td>
            <td>COURSE CODE</td>
            
            <td colspan = 2>Actions</td>
            </tr>
    </thead>
        <tbody>
            @foreach($exams as $exam)
            <tr>
                <td>{{$exam->id}}</td>
                <td>{{$exam->duration}}</td>
                <td>{{$exam->num_of_students}}</td>
                <td>{{$exam->start_time}}</td>
                <td>{{$exam->end_time}}</td>
                <td>{{$exam->date}}</td>
                <td>{{$exam->kind}}</td>
                <td>{{$exam->num_of_pages}}</td>
                <td>{{$exam->num_of_groups}}</td>
                <td>{{$exam->examType}}</td>
                <td>{{$exam->courseCode}}</td>

                <td>
                <a href="{{ route('editexams', ['id' => $exam->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteexams', ['id' => $exam->id]) }}" method="post">
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
