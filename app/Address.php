<?php

namespace App;

use Illuminate\Support\Facades\Cache;

class Address
{
    public $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    /**
     * Add address to cache.
     *
     */
    public function add()
    {
        Cache::put('basket_address', $this->address, 28800);
    }
}
