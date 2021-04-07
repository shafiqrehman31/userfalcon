@extends('layouts.app')
@section('title','Cash Box')
@section('content')

    <!--DASHBOARD INFO-->
    <div class="sb2-2-1" xmlns="http://www.w3.org/1999/html">
        <div class="row">

            <div class="col-lg-3 col-sm-3 col-xs-3">
                <h2>Cash Box <span class="badge badge-warning" style="color: white;background-color: red">Beta</span>
                </h2>
                <hr>
                <a href="#" class="btn btn-default active" style="width:100%; margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>
                <a href="#" class="btn btn-default" style="width:100%;margin-bottom:5px;"><span
                            style="float:left">USD</span><span style="float: right">0</span></a>

            </div>


            <div class="col-lg-7 col-sm-7 col-xs-7">
                <p><b>0.00 (USD )</b>Current Balance</p>
                <p>0.00 (USD ) Balance Under Process</p>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <a href="#" class="btn btn-default btn-sm"><i class="fa fa-exchange"></i>Transfer</a>
                <a href="#" class="btn btn-default btn-sm"><i class="fa fa-arrow-down"></i>Cash Out</a>

            </div>


                <div class="col-lg-3 col-sm-3 col-xs-3">

                </div>


                <div class="col-lg-9 col-sm-9 col-xs-9">

                    <h2>Debit - Credit</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a
                        table:</p>

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#debit" aria-expanded="true"><i
                                        class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                <span>Debit</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#credit" aria-expanded="false"><i
                                        class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                <span>Credit</span></a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div id="debit" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Debit</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Amount</th>
                                                <th>Deduction Fee</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Reason</th>
                                                <th>Transaction At</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Home page</td>
                                                <td>index.html</td>
                                                <td>20 jan 2018</td>
                                                <td>about.html</td>
                                                <td><a href="#!" target="_blank" class="ad-st-view">View</a></td>
                                                <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>About page</td>
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
                        <div id="credit" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Credit</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Amount</th>
                                            <th>Deduction Fee</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Reason</th>
                                            <th>Transaction At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Home page</td>
                                            <td>index.html</td>
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

    {{--content display here--}}
@endsection
