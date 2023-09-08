<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addProduct(){
        return view('Admin.Products.addProduct');
    }

    function store(Request $request){
        $request->validate([
            'Item'=>'required|string',
            'Price'=>'numeric|string',
            'Describe'=>'required|string',
            'Yard'=>'numeric|string',
            'Image'=>'required|string'
        ],[
            'Price.numeric'=>"Price must be a valid number",
            'Yard'=>"Quantity must be of numeric type",
        ]);
        $Products=new products();
        $Products->item=$request->Item;
        $Products->price=$request->Price;
        $Products->describe=$request->Describe;
        $Products->discount=$request->Discount;
        $Products->yard=$request->Yard;
        $Products->image=$request->Image;
        $Products->save();
        return redirect('/admin/manage-products');
    }

    // manage Product controller 
    function manageProduct(Request $request){
        $Products=products::all();
        return view('Admin.Products.manageProduct',compact(['Products']));
    }

    // delete product controller
    function delete(Request $request){
        products::where('id',$request->Id)->delete();
        return redirect()->back();
    }

    function edit($id){
        $Product=products::find($id);
        return view('Admin.Products.editProduct', compact('Product'));
    }
    function update(Request $request){
        $request->validate([
            'Item'=>'required|string',
            'Price'=>'numeric|string',
            'Describe'=>'required|string',
            'Yard'=>'numeric|string',
            'Image'=>'required|string'
        ],[
            'Price.numeric'=>"Price must be a valid number",
            'Yard'=>"Quantity must be of numeric type",
        ]);
       products::where('id',$request->Id)->update(['item'=>$request->Item,
       'price'=>$request->Price,
       'describe'=>$request->Describe,
       'discount'=>$request->Discount,
       'yard'=>$request->Yard,
       'image'=>$request->Image
    ]);
        return redirect('/admin/manage-products');
    }
}
