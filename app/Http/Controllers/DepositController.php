<?php

namespace App\Http\Controllers;
//require_once __DIR__ . "../../../vendor/autoload.php";
use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Resources\Charge;
use CoinbaseCommerce\Resources\Event;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Session;


class DepositController extends Controller
{
    public function index()
    {

        return view('deposit');

    }

    public function CreatePage()
    {

        return view('new-deposit');
    }

    public function CreateDeposit(Request $request)
    {

        /*    $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/charges/");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $post = array(
                "name" => Session::get('userData')['first_name'],
                "description" => "Exchange for Whatever",
                "local_price" => array(
                    'amount' => $request->amount,
                    'currency' => $request->currency
                ),
                "pricing_type" => "fixed_price",
                "metadata" => array(
                    'customer_id' => Session::get('userData')['id'],
                    'name' => Session::get('userData')['first_name']
                )
            );

            $post = json_encode($post);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_POST, 1);

            $headers = array();
            $headers[] = "Content-Type: application/json";
            $headers[] = "X-Cc-Api-Key: 09d4f728-8d76-4636-a442-e5227ded1d9d";
            $headers[] = "X-Cc-Version: 2018-03-22";
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            curl_close ($ch);
            $response = json_decode($result);
            return redirect($response->data->hosted_url);*/
        //dd($request->all());
        //ApiClient::init("09d4f728-8d76-4636-a442-e5227ded1d9d");
        $apiClientObj = ApiClient::init("09d4f728-8d76-4636-a442-e5227ded1d9d");
        $apiClientObj->setTimeout(10);
        //ApiClient::init("09d4f728-8d76-4636-a442-e5227ded1d9d");

        $chargeObj = new Charge();

        $chargeObj->name = Session::get('userData')['first_name'];
        $chargeObj->description = 'Testing the payment system';
        $chargeObj->local_price = [
            'amount' => $request->amount,
            'currency' => $request->currency
        ];
        $chargeObj->pricing_type = 'fixed_price';

        try {
            $chargeObj->save();
            //dd($chargeObj);
            $deposite = new Deposit();
            $deposite->name = Session::get('userData')['first_name'];
            $deposite->user_id = Session::get('userData')['id'];
            $deposite->amount = $chargeObj->pricing['local']['amount'];
            $deposite->currency = $chargeObj->pricing['local']['currency'];
            $deposite->status = $chargeObj->timeline[0]['status'];

            //dd($deposite);
            // insert into database with status pending
            //$queryobject->insertTransaction($_SESSION['user_id'],$chargeObj->id, $amount, $status, $currentTime,
                //$chargeObj->name, $chargeObj->currency);

        } catch (\Exception $exception) {
            echo sprintf("Sorry! payment could not be created. Error: %s \n", $exception->getMessage());
        }




        if ($chargeObj->id) {
            $chargeObj->description = "New description";
            // Retrieve charge by "id"
            try {
                $retrievedCharge = Charge::retrieve($chargeObj->id);
                dd($retrievedCharge);
                $hosted_url = $retrievedCharge->hosted_url;
                header('location: '.$hosted_url);
            } catch (\Exception $exception) {
                echo sprintf("Enable to retrieve charge. Error: %s \n", $exception->getMessage());
            }
        }


/*        $apiClientObj = ApiClient::init("09d4f728-8d76-4636-a442-e5227ded1d9d");
        $apiClientObj->setTimeout(3);
        $chargeObj = new Charge();
        //dd(Session::get('userData')['first_name']);
        $chargeObj->name = Session::get('userData')['first_name'];
        $chargeObj->description = 'Mastering the Transition to the Information Age';
        $chargeObj->local_price = [
            'amount' => $request->amount,
            'currency' => $request->currency,
        ];
        $chargeObj->pricing_type = 'fixed_price';
        $chargeObj->save();
        $chargeId = $chargeObj->id;
        ///$charge = Charge::retrieve($chargeId);
        $allEvents = Event::getAll();
        //dd($allEvents);

        return redirect($chargeObj->hosted_url);*/
    }

    public function CreateCashBoxPage()
    {
        return view('cash-box-deposit');
    }

    public function CreateCashBox()
    {
        echo "echo CreateCashBox post function";
    }


}
