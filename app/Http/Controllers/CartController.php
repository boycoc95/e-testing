<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart($id)
    {
        \Cart::add(array(
            'id' => 456, // inique row ID
            'name' => 'Sample Item 2',
            'price' => 67.99,
            'quantity' => 4,
            'attributes' => array()
        ));
    }

    public function cart()
    {
        $cartCollection = \Cart::getContent();

        dd($cartCollection);
       return response()->json([
           "message" => "Get all cart success",
           "data" => $cartCollection,
       ]);
    }

}


