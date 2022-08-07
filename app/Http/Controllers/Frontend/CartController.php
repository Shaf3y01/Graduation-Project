<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $prod_check = Product::where('id', $product_id)->first();
            if ($prod_check) {
                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $prod_check->name . " already  added to cart"]);
                } else {
                    $cart_item = new Cart();
                    $cart_item->prod_id = $product_id;
                    $cart_item->user_id = Auth::id();
                    $cart_item->prod_qty = $product_qty;
                    $cart_item->save();
                    return response()->json(['status' => $prod_check->name . "added to cart"]);
                }
            }
        } else {
            return response()->json(['status' => 'log in to continue']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartitems'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteproduct(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "item removed from cart"]);
            }else{
                return response()->json(['status' => "item is not exist"]);
            }
        } else {
            return response()->json(['status' => "log in to continue"]);
        }
    }
}
