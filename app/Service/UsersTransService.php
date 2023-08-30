<?php

namespace App\Service;

use App\Transactions;
use App\UsersApp;

class UsersTransService implements UsersTransServiceInterface
{

    public function UploadJson()
    {

        $this->storeusers();
        $this->storeTrans();

        print_r( json_encode(UsersApp::with('Transactions')->get()));
    }
    public function storeusers()
    {

        $allusers = json_decode(file_get_contents(public_path() . "/Assigiment/users.json"), true);
        foreach ($allusers as $users) {
            foreach ($users as $user) {

                if (count(UsersApp::where('id', $user['id'])->get()) == 0) {
                    $request_data['balance'] = $user['balance'];
                    $request_data['currency'] = $user['currency'];
                    $request_data['email'] = $user['email'];
                    $request_data['id'] = $user['id'];
                    UsersApp::create($request_data);
                }
            }
        }
    }

    public function storeTrans()
    {
        $alltransactions = json_decode(file_get_contents(public_path() . "/Assigiment/transactions.json"), true);
        foreach ($alltransactions as $transactions) {
            foreach ($transactions as $transaction) {
                if (count(Transactions::where('parentIdentification', $transaction['parentIdentification'])->get()) == 0) {
                    $request_data2['paidAmount'] = $transaction['paidAmount'];
                    $request_data2['Currency'] = $transaction['Currency'];
                    $request_data2['parentEmail'] = $transaction['parentEmail'];
                    $request_data2['statusCode'] = $transaction['statusCode'];
                    $request_data2['paymentDate'] = $transaction['paymentDate'];
                    $request_data2['parentIdentification'] = $transaction['parentIdentification'];
                    Transactions::create($request_data2);
                }
            }
        }
    }

    public function filterSearch($request)
    {
      

      if(isset($request->statusCode)){

       switch($request->statusCode) {


            case('authorized'):
                $statusCode =1;
                break;
            case('decline'):
                $statusCode =2;
                break;
                case('refunded'):
                    $statusCode =3;
                    break;
            default:
            $statusCode  = 0;
        }
        $transactisons = Transactions::with('UsersApp')->when($statusCode,
        function ($q) use ($statusCode) {
           return $q->where('statusCode',  'like', '%' . $statusCode  . '%');
                })->get();
    }else if(isset($request->currency)) {

        $transactisons = Transactions::with('UsersApp')->when($request,
         function ($q) use ($request) {
            return $q->Where('currency', 'like', '%' . $request->currency . '%');
        })->get();
    }
    else if(isset($request->dateFrom) && isset($request->dateTo) ) {

        $transactisons = Transactions::with('UsersApp')->when($request,
         function ($q) use ($request) {
            return $q->whereBetween('paymentDate', [ $request->dateFrom, $request->dateTo]);
        })->get();
    }
    else if(isset($request->amountFrom) && isset($request->amountTo) ) {

        $transactisons = Transactions::with('UsersApp')->when($request,
         function ($q) use ($request) {
            return $q->whereBetween('paidAmount', [ $request->amountFrom, $request->amountTo]);

        })->get();
    }else{
        $transactisons = Transactions::with('UsersApp')->get();
    }
    
        print_r( json_encode($transactisons));

    }
}
