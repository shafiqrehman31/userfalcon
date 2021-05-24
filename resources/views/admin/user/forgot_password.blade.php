<!DOCTYPE html>
<html>
<head>
    <title>{{env('APP_NAME') }} Admin Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->
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
<div class="container box" style="margin-top:130px">
    <h3 align="center">Admin Forgot Password</h3><br/>

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

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('admin/reset_password_without_token')}}" name="forgot_password">
        @csrf
        <div class="form-group">
            <label>Email <span class="required_field">*</span></label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}"/>

        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Forgot Password"/>
            <a href="{{url('admin/login')}}" class="btn btn-link">Cancel</a>
        </div>
    </form>
    <script>
        let base_url = "{{ env('APP_FRONT') }}";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <!-- <script src="{{asset('js/auth.js')}}"></script> -->


</div>
</body>
</html>
