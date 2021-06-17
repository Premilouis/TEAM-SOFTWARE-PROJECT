@extends('layout/admin')

@section('title')
    Add Price
@endsection


@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New Price</h1>
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
      <form method="post" action="{{ url('/storeprices') }}">
          @csrf
          <div class="form-group">

                <label for="unit">Unit:</label>
                <input type="text" class="form-control" name="unit"/>
            </div>
            <div class="form-group">

                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price"/>
            </div>

                <div class="form-group">
                <label for="user_type_id">User Type:</label>  
                <select class="form-control" name="user_type_id">
                @foreach ($usertype as $ut)
                <option value="{{$ut->id}}">{{$ut->type}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label for="exam_type_id">Exam Type:</label>  
                <select class="form-control" name="exam_type_id">
                @foreach ($examtype as $et)
                <option value="{{$et->id}}">{{$et->type}}</option>
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
          
          <button type="submit" class="btn btn-primary-outline">Add Price</button>
      </form>
  </div>
</div>
</div>
@endsection


@section('scripts')

@endsection
