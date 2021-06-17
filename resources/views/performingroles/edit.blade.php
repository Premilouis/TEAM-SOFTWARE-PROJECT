@extends('layout/admin')

@section('title')
    Edit PerformingRole
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a PerformingRole</h1>
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
        <form method="post" action="{{ route('updateperformingroles', ['id' => $performingrole->id]) }}">
            @method('PATCH') 
            @csrf
            
                <div class="form-group">
                <label for="user_id">User Email:</label>  
                <select class="form-control" name="user_id" value={{ $performingrole->email }} >
                @foreach ($user as $ur)
                <option value="{{$ur->id}}" {{ $ur->id == $performingrole->user_id ? 'selected' : ''}}>{{$ur->email}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label for="action_id">Action Name:</label>  
                <select class="form-control" name="action_id" value={{ $performingrole->name }} >
                @foreach ($action as $a)
                <option value="{{$a->id}}" {{ $a->id == $performingrole->action_id ? 'selected' : ''}}>{{$a->name}}</option>
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
