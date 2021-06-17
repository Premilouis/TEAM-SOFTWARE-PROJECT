@extends('layout/admin')

@section('title')
    Edit UserRole
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a UserRole</h1>
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
        <form method="post" action="{{ route('updateuserroles', ['id' => $userrole->id]) }}">
            @method('PATCH') 
            @csrf
            
                <div class="form-group">
                <label for="user_id">User Email:</label>  
                <select class="form-control" name="user_id" value={{ $userrole->email }} >
                @foreach ($user as $ur)
                <option value="{{$ur->id}}" {{ $ur->id == $userrole->user_id ? 'selected' : ''}}>{{$ur->email}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label for="role_id">Role Type:</label>  
                <select class="form-control" name="role_id" value={{ $userrole->type }} >
                @foreach ($role as $r)
                <option value="{{$r->id}}" {{ $r->id == $userrole->role_id ? 'selected' : ''}}>{{$r->type}}</option>
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
