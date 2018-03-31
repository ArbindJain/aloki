<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\BulkOrder;
use App\Model\ContactUs;

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

        return redirect()->back();
    }

    /**
     * Show the contact us form data.
     *
     */
    public function contactUsData()
    {
    	$contactUses = ContactUs::all();

        return view('admin.pages.contactus', compact('contactUses'));
    }
}
