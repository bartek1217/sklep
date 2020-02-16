<?php

namespace App\Http\Helper;

use Illuminate\Http\Request;

class Helper
{
    public static function dot2com($price)
    {
        return str_replace('.', ',', $price);
    }
}