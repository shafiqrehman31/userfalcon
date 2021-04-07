@extends('layouts.admin')
@section('title', 'Edit User')
@section('formtitle', 'Edit User')
@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="col-sm-12">
                <h1>Edit User</h1>
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
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
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
{{--                        <h3 class="card-title">Edit User</h3>--}}

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{url('admin/user/update')}}"
                          name="registration">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="first_name" class="form-control fullname"
                                       placeholder="Enter First Name" value="{{$user->first_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Last Name</label>
                                <input type="text" name="last_name" class="form-control fullname"
                                       placeholder="Enter Last Name" value="{{$user->last_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="Enter Email" value="{{$user->email}}">
                            </div>
                            <div class="form-group d-none">
                                <label for="exampleAddUser">Role</label>
                                <select name="role_id" class="form-control">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputPassword1">Password</label>--}}
{{--                                <input type="password" name="password" class="form-control" id="password"--}}
{{--                                       placeholder="Enter Password">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputPassword1">Confirm Password</label>--}}
{{--                                <input type="password" name="password_confirmation" class="form-control" id="cpassword"--}}
{{--                                       placeholder="Enter Password">--}}
{{--                            </div>--}}
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('admin/user')}}"  class="btn btn-warning" >Cancel</a>

                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div>
    </section>
@endsection
