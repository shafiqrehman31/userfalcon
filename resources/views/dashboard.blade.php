@extends('layouts.app')
@section('title','Home')
@section('content')

    <!--DASHBOARD INFO-->
    <div class="sb2-2-1">
        <h2>Home</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>DEPOSITED</h5>
                        <h4>948</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>PROFIT</h5>
                        <h4>672</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>REF.BONUS</h5>
                        <h4>689</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Withdrawals</h5>
                        <h4>24</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

            {{--content display here--}}

@endsection