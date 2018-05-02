<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\BulkOrder;
use App\Model\ContactUs;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::orderBy('created_at', 'asc')->get();

        return view('frontEnd.homepage', compact('products'));
    }

    /**
     * Ajax call on Bulk order submit.
     *
     */
    public function bulkOrderSubmit(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'tlf'=>'required',
            'orderFor'=>'required',
        ]);

        $bulkOrder = new BulkOrder;
        $bulkOrder->name = $request->name;
        $bulkOrder->phone = $request->phone;
        $bulkOrder->address = $request->address;
        $bulkOrder->poststed = $request->poststed;
        $bulkOrder->post_number = $request->post_number;
        $bulkOrder->email = $request->email;
        $bulkOrder->tlf = $request->tlf;
        $bulkOrder->order_for = $request->orderFor;
        $bulkOrder->additional_inquiry = $request->additional_inquiry;
        $bulkOrder->save();

        return response()->json([
            "success" => true,
            "response" => 'Meldingen ble sent inn.'
        ]);
    }

    /**
     * Ajax call on contact us submit.
     *
     */
    public function contactUsSubmit(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $contactUs = new ContactUs;
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->phone = $request->phone;
        $contactUs->subject = $request->subject;
        $contactUs->message = htmlspecialchars_decode($request->message);
        $contactUs->save();

        return response()->json('Meldingen ble sent inn.');
    }
}
