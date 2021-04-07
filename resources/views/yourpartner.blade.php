@extends('layouts.app')
@section('title','Your Partners')
@section('content')

    <!--DASHBOARD INFO-->
    <div class="sb2-2-1">
        <h2>Referral Partners</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <div class="row">

                    <div class="col-lg-2 col-sm-2 col-xs-2">
                        <h5>BlueMoon Childs</h5>
                        <h4>948</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-xs-2">
                        <h5>SilverRank Childs</h5>
                        <h4>672</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-xs-2">
                        <h5>Aurora Childs</h5>
                        <h4>689</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-xs-2">
                        <h5>CoordinatorRank Childs</h5>
                        <h4>24</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-xs-2">
                        <h5>Cullinan Childs</h5>
                        <h4>689</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-xs-2">
                        <h5>DiamondRank Childs</h5>
                        <h4>24</h4>
                        <a href="#"></a>
                    </div>

        </div>
    </div>
    <div class="sb2-2-1">
       {{-- <h2>Referral Partners</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>--}}
        <div class="row">

                    <div class="col-lg-3 col-sm-3 col-xs-3">
                        <h5>First Level Total</h5>
                        <h4>948</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-3">
                        <h5>Second Level Total</h5>
                        <h4>672</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-3">
                        <h5>Third Level Total</h5>
                        <h4>689</h4>
                        <a href="#"></a>
                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-3">
                        <h5>Final Total</h5>
                        <h4>24</h4>
                        <a href="#"></a>
                    </div>

        </div>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Referral Partners</h2>
                        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>

                        <ul class="nav nav-tabs tab-list">
                            <li class="active"><a data-toggle="tab" href="#firstlevel" aria-expanded="true"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>1st Level Referrals</span></a>
                            </li>
                            <li class=""><a data-toggle="tab" href="#seconflevel" aria-expanded="false"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>2nd Level Referrals</span></a>
                            </li>
                            <li class=""><a data-toggle="tab" href="#thirdlevel" aria-expanded="false"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>3rd Level Referrals</span></a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="firstlevel" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Referral Partners</h4>
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User Name</th>
                                                    <th>Mobile #</th>
                                                    <th>Email</th>
                                                    <th>Falcon ID</th>
                                                    <th>Parent Id</th>
                                                    <th>Total Usd</th>
                                                    <th>Total Re Invest</th>
                                                    <th>Created At</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Home page</td>
                                                    <td>index.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>About page</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>All course page</td>
                                                    <td>all-course.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Course detail page</td>
                                                    <td>course-details.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Awards page</td>
                                                    <td>awards.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Admission page</td>
                                                    <td>admission.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Seminar page</td>
                                                    <td>seminar.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Events</td>
                                                    <td>events.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Student profile</td>
                                                    <td>student-profile.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Student dashboard</td>
                                                    <td>student-dashboard.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="seconflevel" class="tab-pane fade">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor ad-cou-deta-h4">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Mobile #</th>
                                                <th>Email</th>
                                                <th>Falcon ID</th>
                                                <th>Parent Id</th>
                                                <th>Total Usd</th>
                                                <th>Total Re Invest</th>
                                                <th>Created At</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Home page</td>
                                                <td>index.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>About page</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>All course page</td>
                                                <td>all-course.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Course detail page</td>
                                                <td>course-details.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Awards page</td>
                                                <td>awards.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Admission page</td>
                                                <td>admission.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Seminar page</td>
                                                <td>seminar.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Events</td>
                                                <td>events.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Student profile</td>
                                                <td>student-profile.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Student dashboard</td>
                                                <td>student-dashboard.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="thirdlevel" class="tab-pane fade">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Mobile #</th>
                                                <th>Email</th>
                                                <th>Falcon ID</th>
                                                <th>Parent Id</th>
                                                <th>Total Usd</th>
                                                <th>Total Re Invest</th>
                                                <th>Created At</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Home page</td>
                                                <td>index.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>About page</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>All course page</td>
                                                <td>all-course.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Course detail page</td>
                                                <td>course-details.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Awards page</td>
                                                <td>awards.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Admission page</td>
                                                <td>admission.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Seminar page</td>
                                                <td>seminar.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Events</td>
                                                <td>events.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Student profile</td>
                                                <td>student-profile.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Student dashboard</td>
                                                <td>student-dashboard.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td>20 jan 2018</td>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--content display here--}}
@endsection
