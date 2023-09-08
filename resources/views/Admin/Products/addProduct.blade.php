<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>

   @extends ('layouts.Admin.app')
 

   @section('form') 
    @if (session('success'))
<h2>Add Product</h2>
<div class="alert alert-success">
  <strong>Success!</strong>Blog added.
</div>
 @endif
    <!-- <center> -->
        <div class="text-danger">
            @foreach( $errors->all() as $error)
                {{$error}}
            @endforeach
          
        </div>
        <form action="{{url('/admin/add-product')}}" method="post">
      
        @csrf
        <h3 id="sign-up-h3" style="color: rgb(27, 6, 6);">Add products</h3>
                <div class="input">
                    <label class="label" for="">Product Name</label>
                    <input  class="inpt-tag" name="Item" type="text">
                @error('Item') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="label" for=""> Product Unit Price </label>
                   <input type="text" name="Price" class="inpt-tag">
                   @error('Price') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="label" for="">Product Description</label>
                    <input  class="inpt-tag" name="Describe" type="text">
                    @error('Describe') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="label" for="">Product Discount</label>
                    <input  class="inpt-tag" name="Discount" type="text">
                    @error('Discount') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="label" for="">Quantity in yards</label>
                    <input  class="inpt-tag" name="Yard" type="text">
                    @error('Yard') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="label" for="">Image</label>
                    <input  class="inpt-tag" name="Image" type="text">
                    @error('Image') <p class="text-danger">{{$message}}</p> @enderror
                </div>
              
                <div class="input">
                  <button class="button btn btn-danger" type="submit">Add Product</button>
                </div>
                <div class="input">
                   <a href="admin-dashboard.php" class="cancel btn btn-warning">Cancel</a>
                </div>
        </form>
    <!-- </center> -->
    @endsection
 
    
   
</body>
</html>