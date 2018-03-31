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
    	$products = Product::all();

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
            'address'=>'required',
            'item'=>'required',
        ]);

        $bulkOrder = new BulkOrder;
        $bulkOrder->name = $request->name;
        $bulkOrder->email = $request->email;
        $bulkOrder->phone = $request->phone;
        $bulkOrder->address = $request->address;
        $bulkOrder->item = $request->item;
        $bulkOrder->save();

        return response()->json("Your inquiry has been submitted successfully");
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

        return response()->json('Your message submitted successfully.');
    }
}
