@extends('layouts.app')
@section('title','Profit Calculator')
@section('content')

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Profit Calculator</h2>
                        <p>Calculate Profit </p>
                         <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Profit Calculator</h4>
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <div class="row">
                                        <form>

                                                <div class="col-md-6">
                                                    <div class="input-field col s12">
                                                        <input type="text" value="" class="validate">
                                                        <label class="">Deposit Approved Date:</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input type="text" value="" class="validate">
                                                        <label>Deposit Sold/Current Date:</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input type="text" value="" class="validate">
                                                        <label>Deposit Amount:</label>
                                                    </div>

                                                <div class="input-field col s12">
                                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Calculate Profit"></i>
                                                    <i class="waves-effect waves-light btn-large btn-danger waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Reset"></i>
                                                </div>
                                                </div>

                                        </form>
                                            <div class="col-md-6">
                                            </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor ad-cou-deta-h4">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Semester 1" class="validate">
                                                <label class="">Main exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="Board Exam Training Classes" class="validate">
                                                <label>Exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="12 may 2018" class="validate">
                                                <label>Date</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="10:00AM" class="validate">
                                                <label>Start time</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="03:00hrs" class="validate">
                                                <label>Duration</label>
                                            </div>
                                        </div>

                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">De-Active</option>
                                                    <option value="3">Delete</option>
                                                </select>
                                            </div>


                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>

                                    </form>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Semester 1" class="validate">
                                                <label class="">Main exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="Board Exam Training Classes" class="validate">
                                                <label>Exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="12 may 2018" class="validate">
                                                <label>Date</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="10:00AM" class="validate">
                                                <label>Start time</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="03:00hrs" class="validate">
                                                <label>Duration</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">De-Active</option>
                                                    <option value="3">Delete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor ad-cou-deta-h4">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Semester 1" class="validate">
                                                <label class="">Main exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="Board Exam Training Classes" class="validate">
                                                <label>Exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="12 may 2018" class="validate">
                                                <label>Date</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="10:00AM" class="validate">
                                                <label>Start time</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="03:00hrs" class="validate">
                                                <label>Duration</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">De-Active</option>
                                                    <option value="3">Delete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Semester 1" class="validate">
                                                <label class="">Main exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="Board Exam Training Classes" class="validate">
                                                <label>Exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="12 may 2018" class="validate">
                                                <label>Date</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="10:00AM" class="validate">
                                                <label>Start time</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="03:00hrs" class="validate">
                                                <label>Duration</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">De-Active</option>
                                                    <option value="3">Delete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection