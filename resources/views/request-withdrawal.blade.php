@extends('layouts.app')
@section('title','Request Withdrawal')
@section('content')

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                @include('partials.messages')
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Request Withdrawal</h2>
                        <p>Payment will be sent to your receiving address.</p>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Request Withdrawal</h4>
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <form method="post" action="{{url('request-withdrawal')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="mode">
                                                        <option value="" disabled selected>Select Withdrawal Mode</option>
                                                        <option value="Bonus">Bonus</option>
                                                        <option value="Profit">Profit</option>
                                                        <option value="Sold">Sold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="currency">
                                                        <option value="" disabled selected>Select Withdrawal Currency</option>
                                                        <option value="USD(Dollar)">USD(Dollar)</option>
                                                        <option value="BTC(BitCoin)">BTC(BitCoin)</option>
                                                        <option value="ETH(Etherum)">ETH(Etherum)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="fund_type">
                                                        <option value="" disabled selected>Select Fund Type</option>
                                                        <option value="Cash Withdrawal">Cash Withdrawal</option>
                                                        <option value="Transfer to my Cash Box">Transfer to my Cash Box</option>
                                                        <option value="Transfer to my account">Transfer to my account</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="amount" value="{{ $total_withdrawals_perday }}" class="validate">
                                                    <label>Amount</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="donations" value="" class="validate">
                                                    <a href="#">what is this?</a>
                                                    <label>Donation for B4U Foundation</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="relief_fund" value="" class="validate">
                                                    <label>Donate in B4U Coronavirus Relief Fund </label>
                                                </div>
                                            </div>
                                            <p>Note : You can request only 1 Profit withdrawal within One Month.</p>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Deposit Now"></i>
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