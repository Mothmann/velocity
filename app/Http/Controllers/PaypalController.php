<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\PaymentExecution;

class PaypalController extends Controller
{
    public function index(Request $request){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AXXq-L5O_WqSTqTBlGQHKm52Y0LieB4MwVj-spTUbBHWdOYvi4rF_gynSJl1hZG9MGPftzy2QENwvGJW',     // ClientID
                'EEthQ-3w9MNnwmXkr3u7DLrjgsVKP15-7WxjKcQXRUCpY0dZVK5Hjh2Y-d7YB2FVHcPNRyslHy4Ctsr7'      // ClientSecret
            )
        );
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal($request->get('amount'));
        $amount->setCurrency('USD');

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal_return'))
            ->setCancelUrl(route('paypal_cancel'));

        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            echo $payment;
            echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
            return redirect($payment->getApprovalLink());
        }
        catch (\PayPal\Exception\PayPalConnectionException $ex) {

            echo $ex->getData();
        }
    }
    public function paypalReturn(){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AXXq-L5O_WqSTqTBlGQHKm52Y0LieB4MwVj-spTUbBHWdOYvi4rF_gynSJl1hZG9MGPftzy2QENwvGJW',     // ClientID
                'EEthQ-3w9MNnwmXkr3u7DLrjgsVKP15-7WxjKcQXRUCpY0dZVK5Hjh2Y-d7YB2FVHcPNRyslHy4Ctsr7'      // ClientSecret
            )
        );
//        dd(\request()->all());
        $paymentId = $_GET['paymentId'];
        $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
        $payerId = $_GET['PayerID'];

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            $result = $payment->execute($execution, $apiContext);
            //dd($result);
            return view('home'); //here redirect dompdf
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        }
    }
    public function paypalCancel(){
        return view('auth.cancel-order'); //here cancel view
    }

}
