@extends('layout/admin')

@section('title')
    Add Role
@endsection


@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New Role</h1>
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
      <form method="post" action="{{ url('/storeroles') }}">
          @csrf
          <div class="form-group">    
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          
          <button type="submit" class="btn btn-primary-outline">Add Role</button>
      </form>
  </div>
</div>
</div>
@endsection


@section('scripts')

@endsection
