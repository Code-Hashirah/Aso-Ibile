<?php

namespace App\Http\Controllers;

use App\Models\authModel;
use Illuminate\Http\Request;

class authController extends Controller
{
    function registerPage(){
        return view('Admin.Auth.signup');
    }

    function register(Request $request){
        $request->validate([
            'Email'=>'required|string',
            'Fullname'=>'required|string',
            'Address'=>'required|string',
            'Phone'=>'numeric|string',
            'Password'=>'required|string',
            'Confirm'=>'required|string',
        ]);
        $Auth=new authModel();
        $Auth->email=$request->Email;
        $Auth->fullname=$request->Fullname;
        $Auth->address=$request->Address;
        $Auth->phone=$request->Phone;
        $Auth->password=$request->Password;
        $Auth->save();
        return redirect('/');
        // return "Hello";
    }

    function loginPage(){
        return view('Admin.Auth.signin');
    }

    function login(Request $request){
        //
    }
}
