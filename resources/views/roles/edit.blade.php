@extends('layout/admin')

@section('title')
    Edit Role
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Role</h1>
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
        <form method="post" action="{{ route('updateroles', ['id' => $role->id]) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="type">Type:</label>
                <input type="text" class="form-control" name="type" value={{ $role->type }} />
            </div>

            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
     </div>
    </div>
</div>
    

@endsection



@section('scripts')

@endsection
