<?php

namespace App;

use App\Products;
use Illuminate\Support\Facades\Cache;

class Basket
{
    public $items;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldBasket)
    {
        if ($oldBasket) {
            $this->items = $oldBasket;
            $this->totalPrice = $oldBasket['totalPrice'];
        } else {
            $this->items = null;
            $this->totalPrice = 0;
        }
    }

    public function add($productId, $quantity)
    {
        $product = Products::find($productId);
        $this->items['items'][$productId]['name'] = $product->name;
        $this->items['items'][$productId]['quantity'] = $this->items['items'][$productId]['quantity'] ?? 0;
        $this->items['items'][$productId]['quantity'] += $quantity;
        $this->items['items'][$productId]['price'] = $product->price;
        $this->items['items'][$productId]['totalPrice'] = $product->price * $this->items['items'][$productId]['quantity'];
        $this->items['totalPrice'] = $this->totalPrice ?? 0;
        $this->totalPrice += $product->price * $quantity;
        $this->items['totalPrice'] = $this->totalPrice;
        Cache::put('basket', $this->items, 28800);
    }

    public function totalPrice()
    {
        return $this->totalPrice;
    }
}
