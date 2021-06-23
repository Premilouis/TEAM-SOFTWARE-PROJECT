@extends('layout/admin')

@section('title')
    Add User
@endsection


@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New User</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ url('/storeusers') }}">
          @csrf
            
            <div class="form-group">

                <label for="user_name">User Name:</label>
                <input type="text" class="form-control" name="user_name"/>
            </div>
            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email"/>
            </div>
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            
            <div class="form-group">

                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" name="mobile"/>
            </div>
            <div class="form-group">

                <label for="bank_acc_num">Bank Acc Num:</label>
                <input type="text" class="form-control" name="bank_acc_num"/>
            </div>
            <div class="form-group">

                <label for="bank_name">Bank Name:</label>
                <input type="text" class="form-control" name="bank_name"/>
            </div>
            <div class="form-group">

                <label for="nic_num">Nic Num:</label>
                <input type="text" class="form-control" name="nic_num"/>
            </div>
            <div class="form-group">

                <label for="designation">Designation:</label>
                <input type="text" class="form-control" name="designation"/>
            </div>
            <div class="form-group">  

                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password"/>
            </div>
            <div class="form-group">
                <label for="user_type_id">User Type:</label>  
                <select class="form-control" name="user_type_id">
                @foreach ($usertype as $u)
                <option value="{{$u->id}}">{{$u->type}}</option>
                @endforeach
                </select>
            </div>
            <!--  <div class="form-group">  

                <label for="type">User Type:</label>
                <input type="text" class="form-control" name="type"/>
            </div>  -->
          <button type="submit" class="btn btn-primary-outline">Add User</button>
      </form>
  </div>
</div>
</div>
@endsection


@section('scripts')

@endsection
