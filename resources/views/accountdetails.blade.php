@extends('layouts.app')
@section('title','Profile')
@section('content')

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-8">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Edit Wallet Account Information</h4>
                        <p>Edit Wallet Account Information</p>
                    </div>
                    <div class="tab-inn">
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="btc-address" type="text" value="" class="validate" required>
                                    <label for="btc-address" class="">BTC Address</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="eth-address" type="text" value="" class="validate" required>
                                    <label for="eth-address" class="">Eth Address</label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="bch-address" type="text" class="validate" value="" required>
                                    <label for="bch-address" class="">BCH Address</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="ltc-address" type="text" value="" class="validate" required>
                                    <label for="ltc-address">LTC Address</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="xrp-address" type="text" value="" class="validate">
                                    <label for="xrp-address" class="">XRP Address</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="dash-address" type="password" value="srtg24356" class="validate">
                                    <label for="dash-address" class="">DASH Address</label>
                                </div>

                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="zec-address" type="password" value="" class="validate">
                                    <label for="zec-address" class="">ZEC Address</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="rsc-address" type="password" value="" class="validate">
                                    <label for="rsc-address" class="">RSC Address</label>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Update Information" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Profile</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                    </div>
                    <div class="tab-inn">
                                @if($user->user_image)
                                <img src="{{asset('upload/profile/'.$user->user_image)}}"  width="100" height="100" alt="user image">
                                @else
                                <img src="{{asset('images/placeholder.png')}}"  width="100" height="100" alt="user image">
                                @endif
                                <hr>

                                <div class="card-body">
                                    <div class="small text-muted text-uppercase"><strong>User Id: </strong><span>{{$user->user_id}}</span></div>
                                    <div class="small text-muted text-uppercase"><strong>Parent Id: </strong><span>{{$user->parent_id}}</span></div>
                                    <div class="small text-muted text-uppercase"><strong>Name: </strong><span>{{$user->fullname}}</span></div>
                                    <div class="small text-muted text-uppercase"><strong>Email: </strong><span>{{$user->email}}</span></div>
                                    <div class="small text-muted text-uppercase"><strong>Contact: </strong>{{$user->phone}}</div>
                                    <div class="small text-muted text-uppercase"><strong>Account Detail: </strong><span>B4U00269649</span></div>
                                    <div class="small text-muted text-uppercase"><strong>Status: </strong><span></span></div>
                                </div>

                    </div>
                    {{--<div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4>2Fa Authentication Process By</h4>
                            <p>2Fa Authentication Process By</p>
                        </div>
                        <div class="tab-inn">
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="none" type="radio" value="none" class="validate" required>
                                        <label for="none" class="">None</label>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="input-field col s12">

                                        <input id="google" type="radio" value="google" class="validate" required>
                                        <label for="google" class="">Google Authenticator <a href="#">What is it?</a></label>
                                        <span style="float: right; background-color: #8bc34a; border-radius:5px; color: white; font-size: 14px; letter-spacing: 2px">Free</span>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="setup-pin-password" type="radio" value="none" class="validate" required>
                                        <label for="setup-pin-password" class="">Setup Pin/Password</label>
                                        <span style="float: right; color: white;  background-color: #8bc34a; border-radius:5px; font-size: 14px; letter-spacing: 2px">Free</span>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="input-field col s12">
                                        <input id="sms-call-email" type="radio" value="google" class="validate" required>
                                        <label for="sms-call-email" class="">(SMS/CALL) & Email</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Update" class="waves-button-input"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-8">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Edit Account Information</h4>
                        <p>Edit Account Information</p>
                    </div>
                    <div class="tab-inn">
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" value="" class="validate" required>
                                    <label for="name" class="">Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="Email" type="text" value="" class="validate" required>
                                    <label for="Email" class="">Email</label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="phone" type="text" class="validate" value="" required>
                                    <label for="phone" class="">Phone</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="country" type="text" value="" class="validate" required>
                                    <label for="country">Country</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="bank-name" type="text" value="" class="validate">
                                    <label for="bank-name" class="">Bank Name</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="account-title:" type="password" value="srtg24356" class="validate">
                                    <label for="account-title:" class="">Account Title:</label>
                                </div>

                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="ibn" type="password" value="" class="validate">
                                    <label for="ibn" class="">IBAN</label>
                                </div>
                                <a href="#">(What is this?)</a>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="acc-holder-ph" type="password" value="" class="validate">
                                    <label for="acc-holder-ph" class="">Acc. Holder Ph#</label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="next-of-kin" type="password" value="" class="validate">
                                    <label for="next-of-kin" class="">Next of Kin  </label>
                                </div>
                                <a href="#">What is this?</a>
                            </div>
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Update Information" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Avatar Change</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                    </div>
                    <div class="tab-inn">

                        <form action="{{url('user/update-profile-image')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="file-field input-field col s12">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file" name="user_image">
                                        @error('user_image')
                                        <p class="error" style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Profile image">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Upload" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4>Change Password</h4>
                            <p>Change Password</p>
                        </div>
                        <div class="tab-inn">
                            <form action="{{url('user/update-password-profile')}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="input-field col s12">

                                        <input id="old-password" name="old_password" type="password" class="validate">
                                        @error('old_password')
                                        <div class="error" style="color:red">{{ $message }}</div>
                                        @enderror
                                        <label for="old-password" class="">Old Password</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="new-password" name="password" type="password"  class="validate" >
                                        @error('password')
                                        <div class="error" style="color:red">{{ $message }}</div>
                                        @enderror
                                        <label for="new-password" class="">New Password</label> </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="confirm-password" name="password_confirmation" type="password"  class="validate" >
                                        @error('password_confirmation')
                                        <div class="error" style="color:red">{{ $message }}</div>
                                        @enderror
                                        <label for="confirm-password" class="">Password Confirmation</label> </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Change Password" class="waves-button-input"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
