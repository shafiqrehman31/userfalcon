@extends('layouts.admin')
@section('content')
    <div class="card-header">
    <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
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

               @if($userData)
              <form action="{{ url('admin/user/update') }}" method="post" >
                @csrf
                <input type="hidden" value=" {{ $userData->id }}"  name="id" class="form-control" id="inputfirst_name" placeholder="First Name">
                <div class="form-group row">
                    <label for="inputfirst_name" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" value=" {{ $userData->first_name }}"  name="first_name" class="form-control" id="inputfirst_name" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputlast_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                    <input type="text"  value="{{ $userData->last_name }}" name="last_name" class="form-control" id="inputlast_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" value="{{ $userData->email }}" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPohone"  class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input type="text" name="phone" value="{{ $userData->phone }}" class="form-control" id="inputPhone" placeholder="Phone">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" value="" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPasswordconf" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password_confirmation" value= "" class="form-control" id="inputPasswordconf" placeholder="Conf Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPasswordconf" class="col-sm-2 col-form-label"></label>
                    <div class="col-md-10">
                    <button type="submit" class="btn btn-primary" name="addUser">Update User</button>
                    </div>
                </div>
                </form>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
<!-- /.card -->
@endsection