<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<br/>
<div class="container box" style="margin-top:30px">
    <h3 align="center">{{env('APP_NAME') }} User Registration</h3>


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
<!-- /.card-header -->
    <!-- form start -->

    <form role="form" method="post" action="{{url('user/register')}}" name="registration">
        @csrf

        <input type="hidden" name="plan"
               value="{{ (Request::input('plan')) ? Request::input('plan') : '' }}">
        <input type="hidden" name="invest_rang"
               value="{{ (Request::input('Inves-rang')) ? Request::input('Inves-rang') : '' }}">
        <input type="hidden" name="plan_invest"
               value="{{ (Request::input('profilt')) ? Request::input('profilt') : '' }}">
        <div class="form-group">
            @if(Request::input('sponser-url'))

                <div class="form-group">
                    <label class="control-label">Referral ID:</label>
                    <input type="text" name="referral_id"  class="form-control"
                           value="{{ (Request::input('sponser-url')) ? Request::input('sponser-url') : '' }}">
                </div>
            @endif

        <div class="form-group">
            <label for="exampleInputEmail1">First Name <span class="required_field">*</span></label>
            <input type="text" name="first_name" class="form-control"
                   placeholder="Enter First Name" value="{{old('first_name')}}" id="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name <span class="required_field">*</span></label>
            <input type="text" name="last_name" class="form-control"
                   placeholder="Enter Last Name" value="{{old('last_name')}}" id="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email address <span class="required_field">*</span></label>
            <input type="email" name="email" class="form-control" id="email"
                   placeholder="Enter Email" value="{{old('email')}}">

       <div class="form-group">
            <label for="phone">Phone<span class="required_field">*</span></label>
            <input type="text" name="phone" class="form-control" id="phone"
                   placeholder="Enter Email" value="{{old('phone')}}">
        </div>
        {{--                                <div class="form-group">--}}
        {{--                                    <label for="exampleAddUser">Role</label>--}}
        {{--                                    <select name="role_id" class="form-control" id="addUser">--}}
        {{--                                        @foreach($roles as $role)--}}
        {{--                                            <option value="{{$role->id}}">{{$role->title}}</option>--}}
        {{--                                        @endforeach--}}
        {{--                                    </select>--}}
        {{--                                </div>--}}
        <div class="form-group">
            <label for="exampleInputPassword1">Password <span class="required_field">*</span></label>
            <input type="password" name="password" class="form-control" id="password"
                   placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password <span class="required_field">*</span></label>
            <input type="password" name="password_confirmation" class="form-control"
                   id="cpassword" placeholder="Enter Password">
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <div class="form-group">
                <button type="submit" class="btn btn-primary" onsubmit="eventHandler">Submit</button>
                <a href="{{url('user/login')}}" class="btn btn-link">Already an Account</a>
            </div>
        </div>
    </form>
    <script>
        let base_url = "{{ env('APP_FRONT') }}";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="{{asset('js/auth.js')}}"></script>


</div>
</body>
</html>
