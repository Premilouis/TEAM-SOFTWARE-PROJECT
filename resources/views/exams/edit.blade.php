@extends('layout/admin')

@section('title')
    Edit Exam
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Exam</h1>
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
        <form method="post" action="{{ route('updateexams', ['id' => $exam->id]) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="duration">Duration:</label>
                <input type="text" class="form-control" name="duration" value={{ $exam->duration }} />
            </div>
            <div class="form-group">

                <label for="num_of_students">Num Of Students:</label>
                <input type="text" class="form-control" name="num_of_students" value={{ $exam->num_of_students }} />
            </div>
            <div class="form-group">

                <label for="start_time">Start Time:</label>
                <input type="time" class="form-control" name="start_time" value={{ $exam->start_time }} />
            </div>
            <div class="form-group">

                <label for="end_time">End Time:</label>
                <input type="time" class="form-control" name="end_time" value={{ $exam->end_time }} />
            </div>
            <div class="form-group">

                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" value={{ $exam->date }} />
            </div>
            
            <div class="form-group">

                <label for="kind">Kind:</label>
                <input type="text" class="form-control" name="kind" value={{ $exam->kind }} />
            </div>
            <div class="form-group">

                <label for="num_of_pages">Num Of Pages:</label>
                <input type="text" class="form-control" name="num_of_pages" value={{ $exam->num_of_pages }} />
            </div>
            <div class="form-group">

                <label for="num_of_groups">Num Of Groups:</label>
                <input type="text" class="form-control" name="num_of_groups" value={{ $exam->num_of_groups }} />
            </div>

                <div class="form-group">
                <label for="exam_type_id">Exam Type:</label>  
                <select class="form-control" name="exam_type_id" value={{ $exam->type }} >
                @foreach ($examtype as $e)
                <option value="{{$e->id}}" {{ $e->id == $exam->exam_type_id ? 'selected' : ''}}>{{$e->type}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label for="course_id">Course Code:</label>  
                <select class="form-control" name="course_id" value={{ $exam->code }} >
                @foreach ($course as $c)
                <option value="{{$c->id}}" {{ $c->id == $exam->course_id ? 'selected' : ''}}>{{$c->code}}</option>
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
