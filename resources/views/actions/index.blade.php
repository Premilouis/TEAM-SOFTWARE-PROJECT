@extends('layout/admin')

@section('title')
    Actions 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Actions</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createactions') }}" class="btn btn-primary">New Action</a>
    </div>  
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>
  <table class="table table-striped">
  <thead>
            <tr>
            <td>ID</td>
            <td>Name</td>
                <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($actions as $action)
            <tr>
                <td>{{$action->id}}</td>
                <td>{{$action->name}}</td>
                <td>
                <a href="{{ route('editactions', ['id' => $action->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteactions', ['id' => $action->id]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
                
                
            </tr>
            @endforeach
        </tbody>
  </table>
</div>
</div>
@endsection

  

@section('scripts')

@endsection
