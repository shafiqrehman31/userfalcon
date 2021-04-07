@extends('layouts.admin')
@section('title', 'Add User')
@section('formtitle', 'Add User')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1>Add User</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
{{--                        <h3 class="card-title">Add User</h3>--}}

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->


                    <form role="form" method="post" action="{{url('admin/user/adduser')}}" name="registration">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="first_name" class="form-control"
                                       placeholder="Enter First Name" value="{{old('first_name')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Last Name</label>
                                <input type="text" name="last_name" class="form-control"
                                       placeholder="Enter Last Name" value="{{old('last_name')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="Enter Email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleAddUser">Role</label>
                                <select name="role_id" class="form-control" id="addUser">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                       placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                       id="cpassword" placeholder="Enter Password">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div>
    </section>
@endsection
