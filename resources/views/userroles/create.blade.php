@extends('layout/admin')

@section('title')
    Add UserRole
@endsection


@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New UserRole</h1>
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
      <form method="post" action="{{ url('/storeuserroles') }}">
          @csrf
                
                <div class="form-group">
                <label for="user_id">User Email:</label>  
                <select class="form-control" name="user_id">
                @foreach ($user as $ur)
                <option value="{{$ur->id}}">{{$ur->email}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label for="role_id">Role Type:</label>  
                <select class="form-control" name="role_id">
                @foreach ($role as $r)
                <option value="{{$r->id}}">{{$r->type}}</option>
                @endforeach
                </select>
                </div>

          <button type="submit" class="btn btn-primary-outline">Add UserRole</button>
      </form>
  </div>
</div>
</div>
@endsection


@section('scripts')

@endsection
