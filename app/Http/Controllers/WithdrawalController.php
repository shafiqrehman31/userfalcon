<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{

    public function index()
    {
        //$withdrawals = Withdrawal::paginate(10);
        //return view('withdrawals', compact('withdrawals'));
        return view('withdrawals');
    }

    Public function CreatePage()
    {
        $plan = DB::table('plans')->join('withdrawals', 'plans.id', '=', 'withdrawals.plan_id')->where('plans.id', session('userData')['id'])->first();
        //echo "<pre>"; print_r($plan); exit;
        //$CurrentDate =  date("d");
        //dd($CurrentDate);
        if ($plan) {
            $date1 = date_create($plan->plan_date);
            $date2 = date_create(date('y-m-d'));
            $withdrawDate = date_diff($date1, $date2);
            //echo "<pre>"; print_r($withdrawDate); exit;
            //$withdrawDate = 30 - $CurrentDate;

            $plan_invest = $plan->plan_invest;
            if ($plan->plan == 'Bronze') {
                $profit = 7;

            } elseif ($plan->plan == 'Silver') {
                $profit = 8;
            } elseif ($plan->plan == 'Gold') {
                $profit = 9;
            } elseif ($plan->plan == 'Platinum') {
                $profit = 10;
            } elseif ($plan->plan == 'Diamond') {
                $profit = 11;
            }
            $widthdrawals = ($plan_invest * $profit) / 100;
            $total_withdrawals_perday = ($widthdrawals / 30) * $withdrawDate->days;
            //echo "<pre>";
            //print_r($total_withdrawals_perday);
            //exit;
        } else {
            $total_withdrawals_perday = '';
        }
        //exit;

        return view('request-withdrawal', compact('total_withdrawals_perday'));
    }

    Public function CreateWithdrawal(Request $request)
    {

        //dd($request->all());

        /*$request->validate([
            'mode' => 'required',
            'currency' => 'required',
            'fund_type' => 'required',
            'amount' => 'required',
            'donations' => 'required',
            'relief_fund' => 'required'
        ]);*/

        $withdrawal = new Withdrawal;

        //for user table
        $withdrawal->mode = $request->mode;
        $withdrawal->currency = $request->currency;
        $withdrawal->fund_type = $request->fund_type;
        $withdrawal->amount = $request->amount;
        $withdrawal->donations = $request->donations;
        $withdrawal->relief_fund = $request->relief_fund;
        $withdrawal->save();

        return redirect('withdrawals')->with('message', 'Create Successful!');
    }

    Public function EditWithdrawal(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->id);

        return view('withdrawals', compact('withdrawal'));
    }

    Public function UpdateWithdrawal(Request $request)
    {
        $request->validate([
            'mode' => 'required',
            'currency' => 'required',
            'fund_type' => 'required',
            'amount' => 'required',
            'donations' => 'required',
            'relief_fund' => 'required'
        ]);

        $update = [

            'mode' => $request->mode,
            'currency' => $request->currency,
            'fund_type' => $request->fund_type,
            'amount' => $request->amount,
            'donations' => $request->donations,
            'relief_fund' => $request->relief_fund,


        ];
        Withdrawal::where('id', $request->id)->update($update);

        return redirect('withdrawals')->with('message', 'Update  Successful!');
    }

    Public function DeleteWithdrawal(Request $request)
    {

        $withdrawal = Withdrawal::find($request->id);

        $withdrawal->delete();
        return redirect('withdrawals')->with('message', 'Delete  Successful!');
    }


}
