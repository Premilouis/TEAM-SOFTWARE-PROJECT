@extends('layout/admin')

@section('title')
    Edit ExamPerformingRole
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a ExamPerformingRole</h1>
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
        <form method="post" action="{{ route('updateexamperformingroles', ['id' => $examperformingrole->id]) }}">
            @method('PATCH') 
            @csrf
            

            <div class="form-group">
                <label for="exam_id">Exam Name:</label>  
                <select class="form-control" name="exam_id" value={{ $examperformingrole->examKind }} >
                @foreach ($exam as $e)
                <option value="{{$e->id}}" {{ $e->id == $examperformingrole->exam_id ? 'selected' : ''}}>{{$e->courseCode}}_{{$e->kind}}</option>
                @endforeach
                </select>
                </div>

                

                <div class="form-group">
                <label for="performing_role_id">User Action:</label>  
                <select class="form-control" name="performing_role_id" value={{ $examperformingrole->userEmail }} >
                @foreach ($performingrole as $pr)
                <option value="{{$pr->id}}" {{ $pr->id == $examperformingrole->performing_role_id ? 'selected' : ''}}>{{$pr->userEmail}}_{{$pr->actionName}}</option>
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
