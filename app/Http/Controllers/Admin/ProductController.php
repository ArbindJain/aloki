<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use File;
use Image;

class ProductController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:products',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
            'price'=>'required|numeric',
            'old_price'=>'required|numeric',
        ]);

        //save image
        $imageName = $request->image->getClientOriginalName();
        $imagePath = public_path('images/products');
        $image = Image::make($request->image)->resize(800, 600);
        $image->save($imagePath.'/'.$imageName);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->save();

        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        return view('admin.pages.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpeg,png,jpg,gif,svg',
            'price'=>'required|numeric',
            'old_price'=>'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $image = Product::where('id', $id)->select('image')->first();
            // Delete old image
            if (File::exists(public_path('images/products/'.$image->image))) {
                File::delete(public_path('images/products/'.$image->image));
            }

            //Save new image
            $imageName = $request->image->getClientOriginalName();
            $imagePath = public_path('images/products');
            $image = Image::make($request->image)->resize(800, 600);
            $image->save($imagePath.'/'.$imageName);

        } else {
            $imageName = Product::where('id', $id)->value('image');
        }

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->update();

        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Product::where('id', $id)->select('image')->first();
        // Delete image
        if (File::exists(storage_path('app/public/products/'.$image->image))) {
            File::delete(storage_path('app/public/products/'.$image->image));
        }

        Product::where('id', $id)->delete();

        return redirect()->back();
    }
}
