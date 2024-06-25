<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $users = Customer::count();
        $orders = Order::count();
        $cancelOrder = Order::where('status', 'cancelled')->count();
        $paidOrders = Order::where('payment_status', 'paid')->count();
        return view('admin.pages.home', compact('users', 'orders', 'cancelOrder', 'paidOrders'));
    }
}
