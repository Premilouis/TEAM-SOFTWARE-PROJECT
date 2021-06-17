@extends('layout/admin')

@section('title')
    Edit Action
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Action</h1>
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
        <form method="post" action="{{ route('updateactions', ['id' => $action->id]) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $action->name }} />
            </div>

            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
     </div>
    </div>
</div>
@endsection



@section('scripts')

@endsection
