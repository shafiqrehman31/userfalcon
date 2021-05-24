@extends('layouts.admin')
@section('content')
  <!-- Navbar -->
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
              <a  class="btn btn-primary float-right" href="{{ url('admin/user/adduser') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add User</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if ($success = Session::get('message'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $success }}</strong>
              </div>
              @endif

              @if ($message = Session::get('error'))
                  <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                  </div>
              @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email(s)</th>
                  <th>Phone</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($userslist as $listuser)
                <tr>
                  <td>{{ $listuser->first_name}}</td>
                  <td>
                  {{ $listuser->last_name}}
                  </td>
                  <td>{{ $listuser->email}}</td>
                  <td>{{ $listuser->phone}}</td>
                  <td>
                      <a class="btn btn-primary" href="{{ route('showEdit',$listuser->id) }}"><i class="far fa-edit"></i>Edit</a>
                      <a class="btn btn-primary" href="{{ url('admin/user/destroy/'.$listuser->id) }}"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email(s)</th>
                    <th>Phone</th>
                    <th class="text-center">Action</th>
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
  </div>
@endsection
