@extends('layout/admin')

@section('title')
    Add Course
@endsection


@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New Course</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ url('/storecourses') }}">
          @csrf
            <div class="form-group">    
                <label for="code">Code:</label>
                <input type="text" class="form-control" name="code"/>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" class="form-control" name="level"/>
            </div>
            <div class="form-group">
                <label for="num_of_credits">Num_Of_Credits:</label>
                <input type="text" class="form-control" name="num_of_credits"/>
            </div>
          
          <button type="submit" class="btn btn-primary-outline">Add Course</button>
      </form>
  </div>
</div>
</div>
@endsection


@section('scripts')

@endsection
