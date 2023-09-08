<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
   public  function index(){
        $Products=products::all();
        return view('welcome', compact(['Products']));
    }
}
