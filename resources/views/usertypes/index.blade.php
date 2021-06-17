@extends('layout/admin')

@section('title')
    UserTypes 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">UserTypes</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createusertypes') }}" class="btn btn-primary">New UserType</a>
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
            @foreach($usertypes as $usertype)
            <tr>
                <td>{{$usertype->id}}</td>
                <td>{{$usertype->type}}</td>
                <td>
                <a href="{{ route('editusertypes', ['id' => $usertype->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteusertypes', ['id' => $usertype->id]) }}" method="post">
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
