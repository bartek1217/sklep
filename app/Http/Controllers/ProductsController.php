<?php
         
namespace App\Http\Controllers;
   
use App\Http\Controllers\Controller;
use DB;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Cache;
//use Validator;
    
class ProductsController extends Controller 
{
    /**
	 * Show index.
	 */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products', ['products' => $products]);
    }


}