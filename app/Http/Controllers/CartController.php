<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\OrderProduct;
use App\Model\Product;
use App\Rules\DivisibleBy5;
use Illuminate\Http\Request;
use Cart;
use Validator;

class CartController extends Controller
{
	/**
     * Add product to cart.
     *
     */
    public function addItemToCart(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'quantityValue' => ['required', new DivisibleBy5],
        ]);

        if ($validator->fails()) {
        	return response()->json(['status'=>'The quantity should be multiple to 5']);

        } else {

	    	$product = Product::where('id', $request->productId)->first();

	    	Cart::add($product->id, $product->name, $request->quantityValue, $product->price);

	    	return response()->json([
			    "status" => "Varer i handlekurven",
			    "cart" => [
			    	"cartItem" => Cart::count(),
			    	"cartTotal" => Cart::total(),
			    ]
			], 200);
        }
    }

    /**
     * show cart.
     *
     */
    public function showCart()
    {
    	$cartProducts = Cart::content();

    	return view('frontEnd.partial.showCart', compact('cartProducts'))->render();
    }

    /**
     * Remove product from cart.
     *
     */
    public function removeItemFromCart($rowId)
    {
    	Cart::remove($rowId);

    	// $cartProducts = Cart::content();
    	if (Cart::count() > 0) {
	    	return response()->json([
			    "cartItem" => Cart::count(),
		    	"cartTotal" => Cart::total()
			]);
    	} else {
    		return response()->json("Handlekurven er tom");
    	}
    	// return view('frontEnd.partial.showCart', compact('cartProducts'))->render();
    }

    public function orderConfirm(Request $request)
    {
    	//validate user details
		$this->validate($request, [
		    'user_name' => 'required|max:255',
		    'user_etternavn' => 'required',
		    'user_email' => 'required',
		    'user_address' => 'required',
		    'user_postnr' => 'required',
		    'user_sted' => 'required',
		    'user_phone' => 'required',
		]);

	    //store order
	    $order = new Order;
	    $order->user_name = $request->user_name;
	    $order->user_etternavn = $request->user_etternavn;
	    $order->user_email = $request->user_email;
	    $order->user_address = $request->user_address;
	    $order->user_postnr = $request->user_postnr;
	    $order->user_sted = $request->user_sted;
	    $order->user_phone = $request->user_phone;
	    $order->order_items = Cart::count();
	    $order->order_value = Cart::total();
	    $order->save();

	    //store products related to order
	    $productLists = Cart::content();
	    foreach($productLists as $key=>$productList) {
			$o[$key]['order_id'] = $order->id;
			$o[$key]['product_name'] = $productList->name;
			$o[$key]['product_quantity'] = $productList->qty;
			$o[$key]['product_price'] = $productList->price;
	    }
	    $orderProduct = new OrderProduct;
		$orderProduct->insert($o);

		Cart::destroy();
		
		return view('frontEnd.partial.after_checkout_cart', compact('productLists', 'order'))->render();

	}
}
