<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Order;
use App\Address;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BasketController extends Controller
{
    /**
     * Show index.
     */
    public function index()
    {
        return view('basket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $basket = new Basket(Cache::get('basket'));
        $return = $basket->add($request->id, $request->product_quantity);

        if ($return) return $basket->totalPrice();
        else {
            return response()->json([
                'success' => 'false'
            ], 400);
        }
    }

    /**
     * Show the form for address.
     */
    public function address()
    {
        return view('address');
    }

    /**
     * Show the summary.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function summary(Request $request)
    {
        $basket = new Address($request->all());
        $basket->add();

        return view('summary', [
            'address' => Cache::get('basket_address')
        ]);
    }

    /**
     * Save basket.
     *
     */
    public function save()
    {
        $order = new Order();
        $order->insert();
        $order->forgetCache();

        $products = new ProductsController;
        return $products->index();
    }
}
