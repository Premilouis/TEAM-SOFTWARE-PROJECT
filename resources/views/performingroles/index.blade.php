@extends('layout/admin')

@section('title')
    PerformingRoles 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">PerformingRoles</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createperformingroles') }}" class="btn btn-primary">New PerformingRole</a>
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
            <td>ACTION NAME</td>
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($performingroles as $performingrole)
            <tr>
                <td>{{$performingrole->id}}</td>
                <td>{{$performingrole->userEmail}}</td>
                <td>{{$performingrole->actionName}}</td>

                <td>
                <a href="{{ route('editperformingroles', ['id' => $performingrole->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteperformingroles', ['id' => $performingrole->id]) }}" method="post">
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
