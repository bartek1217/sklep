<?php

namespace App;

use Illuminate\Support\Facades\Cache;
use DB;

class Order
{
    public function __construct()
    {
        $this->address = Cache::get('basket_address');
        $this->products = Cache::get('basket');
    }

    public function products()
    {
        return $this->products;
    }

    public function address()
    {
        return $this->address;
    }

    public function insert()
    {
        $now = date("Y-m-d H:i:s");
        try {
            $insert_id = DB::table('orders')->insertGetId(
                ['amount' => $this->products['totalPrice'], 'name' => $this->address['name'], 'surname' => $this->address['surname'], 'street' => $this->address['street'], 'city' => $this->address['city'], 'zip' => $this->address['zip'], 'created_at' => $now, 'updated_at' => $now]
            );
            foreach ($this->products['items'] as $productId => $product) {
                DB::table('orders_products')->insert(
                    ['order_id' => $insert_id, 'product_id' => $productId, 'price' => $product['price'], 'quantity' => $product['quantity'], 'total_price' => $product['totalPrice'], 'created_at' => $now, 'updated_at' => $now]
                );
                DB::table('products')->where('id', $productId)->decrement('availability', $product['quantity']);
            }
        } catch (Exception $e) {
            return array('errors' => array('An unexpected error has occurred. Try again.'));
        }
    }

    public function forgetCache()
    {
        Cache::forget('basket_address');
        Cache::forget('basket');
    }
}
