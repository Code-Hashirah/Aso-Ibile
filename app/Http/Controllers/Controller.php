<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
   public  function index(){
        $Products=products::all()->take(9);
        return view('welcome', compact(['Products']));
        // return $Products;
    }

    public function allProducts(){
        $allProducts=products::all();
        return view('allproducts', compact(['allProducts']));
    }

}
