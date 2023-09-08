<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

@extends ('layouts.users.app')
@section('register')
<section id="sign-up">
            
            <form action="{{url('/sign-up')}}" method="post" class="form">
                @csrf
            <h3 id="sign-up-h3">Register with Aso Oke</h3>
           
            <hr class="text-white">
                <div class="input">
                    <label class="lbl" for="">Email Address</label>
                    <input name="Email" class="input-tag" type="email">
                    @error('Email') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="lbl" for="">Full Name</label>
                    <input name="Fullname"  class="input-tag" type="text">
                    @error('Fullname') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="lbl" for="">Address</label>
                    <input name="Address"  class="input-tag" type="text">
                    @error('Address') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="lbl" for="">Phone</label>
                    <input name="Phone"  class="input-tag" type="tel">
                    @error('Phone') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="lbl" for="">Password</label>
                    <input name="Password" class="input-tag" type="password">
                    @error('Password') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                    <label class="lbl" for="">Comfirm Password</label>
                    <input  class="input-tag" type="password" name="Confirm">
                    @error('Confirm') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input">
                  <button class="button" name="Register" type="submit">Register</button>
                </div>
                <div class="input">
                   <a href="/" class="cancel">Cancel</a>
                </div>
            </form>
    </section>
@endsection
    
</body>
</html>