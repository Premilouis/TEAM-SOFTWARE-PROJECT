@extends('layout/admin')

@section('title')
    Add PerformingRole
@endsection


@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New PerformingRole</h1>
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
      <form method="post" action="{{ url('/storeperformingroles') }}">
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
                <label for="action_id">Action Name:</label>  
                <select class="form-control" name="action_id">
                @foreach ($action as $a)
                <option value="{{$a->id}}">{{$a->name}}</option>
                @endforeach
                </select>
                </div>

          <button type="submit" class="btn btn-primary-outline">Add PerformingRole</button>
      </form>
  </div>
</div>
</div>
@endsection


@section('scripts')

@endsection
