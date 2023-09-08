<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Ofofo</title>
    @extends('layouts.users.app')
    @section('content')
    <main class="row container-fliud">
       @foreach ($Products as $product)
       <div class="col-md-12">
            <h3 class="text-danger">{{$product->item}}</h3>
            <img src="{{$product->picture}}" alt="picture" height="500px" width="100%">
            <p>${{$product->price}}</p>
        </div>
        @endforeach
    </main>
    @endsection
</body>
</html>