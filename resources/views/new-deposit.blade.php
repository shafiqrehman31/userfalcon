@extends('layouts.app')
@section('title','New Deposit')
@section('content')

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>New Deposit</h2>
                        <p>Make deposit</p>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>New Deposit</h4>
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <form method="post" action="{{url('user/new-deposit')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="deposit_mode">
                                                        <option value="" disabled selected>Select Deposit Mode</option>
                                                        <option value="New Investment">New Investment</option>
                                                        <option value="Re-Investment">Re-Investment</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="currency">
                                                        <option value="" disabled selected>Select Currency</option>
                                                        <option value="USD">USD(Dollar)</option>
                                                        <option value="BTC">BTC(BitCoin)</option>
                                                        <option value="ETH">ETH(Etherum)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" value="" name="amount" class="validate">
                                                    <label>Amount</label>
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
    </div>


@endsection