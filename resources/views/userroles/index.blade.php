@extends('layout/admin')

@section('title')
    UserRoles 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">UserRoles</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createuserroles') }}" class="btn btn-primary">New UserRole</a>
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
            <td>USER EMAIL</td>
            <td>ROLE TYPE</td>
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($userroles as $userrole)
            <tr>
                <td>{{$userrole->id}}</td>
                <td>{{$userrole->userEmail}}</td>
                <td>{{$userrole->roleType}}</td>

                <td>
                <a href="{{ route('edituserroles', ['id' => $userrole->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteuserroles', ['id' => $userrole->id]) }}" method="post">
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
