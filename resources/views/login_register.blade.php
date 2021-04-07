<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/education-master/admission.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2020 11:45:19 GMT -->
<head>
    <title>User Falcon</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword"
          content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{asset('images/fav.ico')}}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
          rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('css/style-mob.css')}}" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

<!--SECTION START-->
<section class="c-all h-quote">
    <div class="container">

        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
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
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">

            <div class="n-form-com admiss-form">
                <div class="col s12">
                    <form class="form-horizontal" method="POST" action="{{url('login')}}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-3">Login:</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                       placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control"
                                       placeholder="Enter your Password">
                            </div>
                        </div>

                        <div class="form-group mar-bot-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input
                                            type="submit" value="LOGIN" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="n-form-com admiss-form">
                <div class="col s12">

                    <form class="form-horizontal" method="POST" action="{{url('register')}}">
                        @csrf
                        <input type="hidden" name="plan"
                               value="{{ (Request::input('plan')) ? Request::input('plan') : '' }}">
                        <input type="hidden" name="invest_rang"
                               value="{{ (Request::input('Inves-rang')) ? Request::input('Inves-rang') : '' }}">
                        <input type="hidden" name="plan_invest"
                               value="{{ (Request::input('profilt')) ? Request::input('profilt') : '' }}">
                        <div class="form-group">
                            @if(Request::input('sponser-url'))
                                <label class="control-label col-sm-3">Referral ID:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="referral_id"
                                           value="{{ (Request::input('sponser-url')) ? Request::input('sponser-url') : '' }}">
                                </div>
                            @endif
                            <label class="control-label col-sm-3">Full Name:</label>
                            <div class="col-sm-9">
                                <input type="text" name="fullname" value="{{old('fullname')}}" class="form-control"
                                       placeholder="Enter full name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Email Id:</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                       placeholder="Enter email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Phone:</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" value="{{old('phone')}}" class="form-control"
                                       placeholder="Enter phone number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control"
                                       placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Confirm Password:</label>
                            <div class="col-sm-9">
                                <input type="password" name="password_confirmation" class="form-control"
                                       placeholder="Enter confirm password">
                            </div>
                        </div>

                        {{-- <div class="form-group">
                             <label class="control-label col-sm-3">Course:</label>
                             <div class="col-sm-9">
                                 <select>
                                     <option>-- Select course --</option>
                                     <option>Aerospace Engineering</option>
                                     <option>Agriculture Courses</option>
                                     <option>Fashion Technology</option>
                                     <option>Marine Engineering</option>
                                     <option>Building, Construction Management</option>
                                     <option>Web Development</option>
                                     <option>Accountant course</option>
                                     <option>Dot Net Development</option>
                                     <option>Java Development</option>
                                     <option>Chemical Engineering</option>
                                 </select>
                             </div>
                         </div>--}}
                        <div class="form-group mar-bot-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input
                                            type="submit" value="REGISTER" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

<!--Import jQuery before materialize.js-->
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/education-master/admission.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2020 11:45:19 GMT -->
</html>
