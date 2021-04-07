<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from rn53themes.net/themes/demo/education-master/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2020 11:46:22 GMT -->
<head>
    <title>Falcon Traders | @yield('title')</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword"
          content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
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
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



    <![endif]-->
</head>

<body>
<!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="{{url('user/dashboard')}}" class="logo"><img src="{{asset('images/logo1.png')}}" alt=""/>
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">

        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">

        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                        src="{{asset('images/user/6.png')}}" alt=""/>My Account <i class="fa fa-angle-down"
                                                                                   aria-hidden="true"></i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li><a href="{{url('user/accountdetails')}}" class="waves-effect"><i class="fa fa-cogs"
                                                                                aria-hidden="true"></i>Admin Setting</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{url('user/logout')}}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in"
                                                                                       aria-hidden="true"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="{{asset('images/placeholder.png')}}" alt="">
                    </li>
                    <li>
                        <h5>Falcon Traders<span> A Name of Trust</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="{{url('user/dashboard')}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                            Dashboard</a>
                    </li>
                    <li><a href="{{url('user/cash-box')}}"><i class="fa fa-money" aria-hidden="true"></i>Cash Box</a>
                    </li>
                    <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>Support</a>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>Withdrawals</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{url('user/request-withdrawal')}}">Request Withdrawal</a>
                                </li>
                                <li><a href="{{url('user/withdrawals')}}">Withdrawals</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>Deposit</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{url('user/new-deposit')}}">New Deposit</a>
                                </li>
                                <li><a href="{{url('user/cash-box-deposit')}}">Deposit from Cash Box</a>
                                </li>
                                <li><a href="{{url('user/deposit')}}">Deposits</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>Donations</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{url('user/add-donation')}}">Add Donation</a>
                                </li>
                                <li><a href="{{url('user/donations')}}">Donations List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{url('user/sold')}}"><i class="fa fa-cogs" aria-hidden="true"></i>Sold</a>
                    </li>
                    <li><a href="{{asset('user/profit-calculator')}}"><i class="fa fa-cogs" aria-hidden="true"></i>Profit
                            Calculator</a>
                    </li>
                    <li><a href="{{url('user/referuser')}}"><i class="fa fa-cogs" aria-hidden="true"></i>Ref Users</a>
                    </li>
                    <li><a href="{{url('user/yourpartner')}}"><i class="fa fa-cogs" aria-hidden="true"></i>Your Partners</a>
                    </li>
                    <li><a href="{{url('user/accountdetails')}}"><i class="fa fa-cogs" aria-hidden="true"></i>Update Profile</a>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                                                                   aria-hidden="true"></i>Promotions</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{url('user/six-month-promo-investment')}}">Six Month Promo Investment</a>
                                </li>
                                <li><a href="{{url('user/six-month-promo-list')}}">Six Month Promo List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{url('user/logout')}}"><i class="fa fa-cogs" aria-hidden="true"></i>Logout</a>
                    </li>

                </ul>
            </div>
        </div>

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li>
                        <a href="{{url('user/dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    <li class="active-bre"><a href="#"> @yield('title')</a>
                    </li>
                    <li class="page-back"><a href="{{url('user/dashboard')}}"><i class="fa fa-backward" aria-hidden="true"></i>
                            Back</a>
                    </li>
                </ul>
            </div>