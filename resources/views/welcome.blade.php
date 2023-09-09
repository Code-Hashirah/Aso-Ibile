<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aso Ibile</title>
    <body>
    @extends('layouts.users.app')
    @section('content')
    <h1>Hello</h1>
    <main class="row">
       @foreach ($Products as $product)
       <div class="col-md-4">
            <h3 class="text-danger">{{$product->item}}</h3>
            <img src="{{$product->image}}" alt="picture" height="200px" width="80%">
            <p>₦{{$product->price}}</p>
            <a href="/" class="btn btn-danger"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
        </div>
        @endforeach
    </main>
    @endsection 
    </body>
 

</html>