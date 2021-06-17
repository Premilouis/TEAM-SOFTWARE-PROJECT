@extends('layout/admin')

@section('title')
    Roles 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Roles</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createroles') }}" class="btn btn-primary">New Role</a>
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
            <td>Type</td>
                <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->type}}</td>
                <td>
                <a href="{{ route('editroles', ['id' => $role->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteroles', ['id' => $role->id]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
                
                
            </tr>
            @endforeach
        </tbody>
  </table>
<div>

</div>
@endsection

  

@section('scripts')

@endsection
