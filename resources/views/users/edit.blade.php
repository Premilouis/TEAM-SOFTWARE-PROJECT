@extends('layout/admin')

@section('title')
    Edit User
@endsection


@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a User</h1>
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
        <form method="post" action="{{ route('updateusers', ['id' => $user->id]) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="user_name">User Name:</label>
                <input type="text" class="form-control" name="user_name" value={{ $user->user_name }} />
            </div>
            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value={{ $user->email }} />
            </div>
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $user->first_name }} />
            </div>
            <div class="form-group">

                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $user->last_name }} />
            </div>
            <div class="form-group">

                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" name="mobile" value={{ $user->mobile }} />
            </div>
            <div class="form-group">

                <label for="bank_acc_num">Bank Acc Num:</label>
                <input type="text" class="form-control" name="bank_acc_num" value={{ $user->bank_acc_num }} />
            </div>
            <div class="form-group">

                <label for="bank_name">Bank Name:</label>
                <input type="text" class="form-control" name="bank_name" value={{ $user->bank_name }} />
            </div>
            <div class="form-group">

                <label for="nic_num">Nic Num:</label>
                <input type="text" class="form-control" name="nic_num" value={{ $user->nic_num }} />
            </div>
            <div class="form-group">

                <label for="designation">Designation:</label>
                <input type="text" class="form-control" name="designation" value={{ $user->designation }} />
            </div>

            <div class="form-group">
                <label for="user_type_id">User Type:</label>  
                <select class="form-control" name="user_type_id" value={{ $user->type }} >
                @foreach ($usertype as $u)
                <option value="{{$u->id}}" {{ $u->id == $user->user_type_id ? 'selected' : ''}}>{{$u->type}}</option>
                @endforeach
                </select>
            </div>

            <!--  <div class="form-group">

                <label for="user_type_id">User Type:</label>
                <input type="text" class="form-control" name="user_type_id" value={{ $user->type }} />
            </div> -->

           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
     </div>
    </div>
</div>
    

@endsection



@section('scripts')

@endsection
