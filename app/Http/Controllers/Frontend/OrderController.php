<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Library\SslCommerz\SslCommerzNotification;

class OrderController extends Controller
{
    public function checkoutForm() {
        return view('frontend.pages.checkout');
    }

    public function placeOrder(Request $request) {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'subtotal' => 'required',
            'payment_type' => 'required',
        ]);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate->getMessageBag());
        }

        Order::Create([
            'user_id' => auth('customerGuard')->user()->id,
            'name' => auth('customerGuard')->user()->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'transaction_id'=> date('YmdHis'),
            'price' => $request->price,
            'quantity' => $request->quantity,
            'subtotal' => $request->subtotal,
            'payment_type' => $request->payment_type,
            'payment_status' => 'pending',
            'status' => 'active',
        ]);
        session()->forget('vcart');
        notify()->success('Placed your order successfully.');
        return redirect()->route('order.list');
    }

    public function orderList() {
        $orderDetails = Order::where('user_id' ,auth('customerGuard')->user()->id)->get();
        // dd($orderDetails);
        return view('frontend.pages.order.list', compact('orderDetails'));
    }

    public function cancelOrder($orderId) {
        $orderDetails = Order::find($orderId);
        // dd($orderDetails);
        $orderDetails->update([
            'status' => 'cancelled',
            'payment_status' => 'cancelled',
        ]);

        notify()->success('Order cancelled successfully.');
        return redirect()->back();
    }

    public function makePayment($id) {
        $orderDetails = Order::with('customer')->find($id);
        // dd($orderDetails);
        $this->payment($orderDetails);
        return redirect()->route('order.list');
    }

    public function payment($orderDetails)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $post_data = array();
        $post_data['total_amount'] = (int)$orderDetails->subtotal; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $orderDetails->transaction_id; // tran_id must be unique
        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $orderDetails->user_id;
        $post_data['cus_email'] = $orderDetails->customer->email;
        // dd($post_data);
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

}
