<?php

namespace App\Http\Controllers;

use App\Basket;
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
        return view('summary', [
            'address' => $request->all()
        ]);
    }
}
