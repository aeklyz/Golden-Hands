<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function handlePayment()
    {
        // Set up payment details
        $product = [
            'items' => [
                [
                    'name' => 'Product Name',
                    'price' => 100,
                    'desc' => 'Product Description',
                    'qty' => 1
                ]
            ],
            'invoice_id' => 1,
            'invoice_description' => "Order #{$product['invoice_id']} Bill",
            'return_url' => route('success.payment'),
            'cancel_url' => route('cancel.payment'),
            'total' => 100
        ];

        $paypalModule = new ExpressCheckout;
        $res = $paypalModule->setExpressCheckout($product);
        return redirect($res['paypal_link']);
    }

    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return redirect()->route('order.success');
        }

        return redirect()->route('order.failed');
    }

    public function paymentCancel()
    {
        // Handle payment cancellation
        return redirect()->route('order.cancelled');
    }
}