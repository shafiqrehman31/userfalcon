@extends('layouts.app')
@section('title','Cash Box Deposit')
@section('content')

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Cash Box Deposit</h2>
                        <p>Deposit from Cash Box</p>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Make deposit from Cash Box</h4>
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <form method="post" action="{{url('cash-box-deposit')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Cash Box Amount</option>
                                                        <option value="1">USD(Dollar)</option>
                                                        <option value="2">BTC(BitCoin)</option>
                                                        <option value="3">ETH(Etherum)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" value="" class="validate">
                                                    <label>Amount</label>
                                                </div>
                                            </div>

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