@extends('layouts.admin')
@section('content')
    <div class="card-header">
    <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Add New User</h3>
              </div>
              <div class="card-body">
              @if(count($errors) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                            <li><strong>*!Error</strong>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
              <form action="{{ url('admin/user/adduser') }}" method="post" >
                @csrf
                <div class="form-group row">
                    <label for="inputfirst_name" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                    <input type="text" value="{{ old('first_name')}}"  name="first_name" class="form-control" id="inputfirst_name" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputlast_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" id="inputlast_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3"  class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" value="{{ old('email')}}" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPohone"  class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input type="number" name="phone" class="form-control" id="inputPhone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPasswordconf" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password_confirmation" class="form-control" id="inputPasswordconf" placeholder="Conf Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPasswordconf" class="col-sm-2 col-form-label"></label>
                    <div class="col-md-10">
                    <button type="submit" class="btn btn-primary" name="addUser">Add User</button>
                    </div>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
<!-- /.card -->
@endsection