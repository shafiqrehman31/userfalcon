<!DOCTYPE html>
<html>
<head>
    <title>{{env('APP_NAME') }} User Login</title>
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
<div class="container box" style="margin-top:130px">
    <h3 align="center">User Update Password</h3><br/>

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
    <form method="post" action="{{url('admin/update-password')}}" name="update_password">
        @csrf
        <input type="hidden" value={{$id}} name="userId">
        <div class="form-group">
            <label>New Password <span class="required_field">*</span></label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}"/>
        </div>
        <div class="form-group">
            <label>Confirm Password <span class="required_field">*</span></label>
            <input type="password" name="confirmPassword" class="form-control" value="{{old('password')}}"/>
        </div>
        <div class="form-group">
            <input type="submit" name="updatePassword" class="btn btn-primary" value="Update"/>
            <a href="{{url('user/login')}}" class="btn btn-link">Cancel</a>
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
