@extends('layout/admin')

@section('title')
    Users 
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Users</h1>    
    <div>
         <a style="margin: 19px;" href="{{ url('/createusers') }}" class="btn btn-primary">New User</a>
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
            <td>USER NAME</td>
            <td>EMAIL</td>
            <td>FIRST NAME</td>
            <td>LAST NAME</td>
            <td>MOBILE</td>
            <td>BANK ACC NUM</td>
            <td>BANK NAME</td>
            <td>NIC NUM</td>
            <td>DESIGNATION</td>
            <td>USER TYPE</td>  
            
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->user_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->bank_acc_num}}</td>
                <td>{{$user->bank_name}}</td>
                <td>{{$user->nic_num}}</td>
                <td>{{$user->designation}}</td>
                <td>{{$user->userType}}</td>

                <td>
                <a href="{{ route('editusers', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('deleteusers', ['id' => $user->id]) }}" method="post">
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
