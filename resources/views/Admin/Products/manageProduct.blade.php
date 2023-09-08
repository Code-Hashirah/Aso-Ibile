<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <style>
        #bdy{
            width: auto;
            overflow: hidden;
            height: 50px;
        }
    </style>
    @extends('layouts.admin.app')
    @section('table')
    @if(count($Products) > 0)
    <table class="table">
            <tr>
                <th>S/N</th>
                <th>Item</th>
                <th>Price</th>
                <th>Image</th>
                <th>Discount (%)</th>
                <th>Yards</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
    @php
    $sn=1
    @endphp
    @foreach ($Products as $product)
           <tr> 
                <td>
                    {{$sn++}}
                </td>
                <td>
                    {{$product->item}}
                </td>
                <td>
                    <p id="bdy">{{$product->price}}</p>
                </td>
                <td>
                    <img src="{{$product->image}}" alt="picture" width="200px" height="150px">
                </td>
                <td>
                        <p>{{$product->discount}}</p>
                    </td>
                    <td>
                    <p>{{$product->yard}}</p>
                    </td>
                    <td>
                    <p style=" height:50px; overflow: hidden;" >{{$product->describe}}</p>
                    </td>
                <td>  
                     
                <form action="/admin/delete-product" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="Id" class="" value="{{$product->id}}">
                    <button type="submit" class="btn btn-danger" name="delete">Delete<i class="fa fa-trash" aria-hidden="true"></i></button>
                    <a href="{{url('/admin/edit-product', $product->id) }}" class="btn  btn-warning">Update<i class="fa fa-upload" aria-hidden="true"></i></a>
                </form> </td>
            </tr> 
            @endforeach
          </table>
          @endif

        
    @endsection
</body>
</html>