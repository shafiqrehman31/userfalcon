@extends('layouts.app')
@section('title','Add Donation')
@section('content')

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <h2>Add Donation</h2>
                        <p>Contribute to help others</p>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade active in">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Add Donation</h4>
                                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    </div>
                                    <div class="bor">
                                        <form>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Payment Mode</option>
                                                        <option value="1">Bonus</option>
                                                        <option value="2">Profit</option>
                                                        <option value="3">Sold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Donation Currency</option>
                                                        <option value="1">USD(Dollar)</option>
                                                        <option value="2">BTC(BitCoin)</option>
                                                        <option value="3">ETH(Etherum)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Donation Type</option>
                                                        <option value="1">Covid 19 Relief Fund</option>
                                                        <option value="2">Orphan Home</option>
                                                        <option value="3">Masjid</option>
                                                        <option value="3">Eid e Quban</option>
                                                        <option value="3">Needy People</option>
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