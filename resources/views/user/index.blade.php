@extends('layouts.admin')
@section('title', 'User List')
@section('formtitle', 'User List')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1>User List</h1>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    @if ($success = Session::get('message'))
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $success }}</strong>

                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
{{--                        <h3 class="card-title">User List</h3>--}}
                        <a href="{{url('admin/user/showadduserview')}}" class="btn btn-primary float-right d-none"><i
                                    class="fa fa-plus"></i>Add User</a>

                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $number =1;
                            @endphp

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$number}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <form method="post" action="{{ url('admin/user/edituserview')}}" class="uf-global-width">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <button  class="btn btn-link fa fa-edit"> </button>
                                        </form>
                                        <form method="post" action="{{ url("admin/user/delete")}}" class="uf-global-width">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                        <button  onclick="return confirm('Are you Sure')"
                                           class="btn btn-link fa fa-trash-alt"> </button>
                                        </form>
                                    </td>

                                </tr>
                                @php
                                    $number ++;
                                @endphp
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
