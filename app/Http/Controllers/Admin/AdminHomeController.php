<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\BulkOrder;
use App\Model\ContactUs;
use App\Model\OrderProduct;
use App\Model\Order;
use Cart;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $products = Product::all();

        return view('admin.pages.dashboard', compact('products'));
    }

    /**
     * Show bulk order inquiry.
     *
     */
    public function bulkOrderData()
    {
        $bulkOrders = BulkOrder::all();

        return view('admin.pages.bulkOrder', compact('bulkOrders'));
    }

    /**
     * Delete bulk order inquiry.
     *
     */
    public function bulkOrderDelete($id)
    {
        BulkOrder::where('id', $id)->delete();

        return redirect()->back()->with('message', 'Inquiry deleted');
    }

    /**
     * Show orders list.
     *
     */
    public function orders()
    {
        $orders = Order::all();

        return view('admin.pages.orders', compact('orders'));
    }

    /**
     * Show all products by order.
     *
     */
    public function orderProducts($id)
    {
    	$order = Order::where('id',$id)->first();
        $orderProducts = OrderProduct::where('order_id', $id)->get();

        return view('admin.pages.productsListOfOrder', compact('orderProducts', 'order'));
    }

    /**
     * delete order
     *
     */
    public function deleteOrder($id)
    {
        Order::where('id', $id)->delete();

        return redirect()->back()->with('message', 'order deleted');
    }

    /**
     * contact us list
     *
     */
    public function contactUsData()
    {
        $contact_uses = ContactUs::all();

        return view('admin.pages.contact_us', compact('contact_uses'));
    }
}
