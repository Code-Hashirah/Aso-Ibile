<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login::Aso Ibile</title>

@extends ('layouts.users.app')
@section('register')
<section id="sign-up">
            
            <form action="{{url('/sign-in')}}" method="post" class="form">
                @csrf
            <h3 id="sign-up-h3">Login into Aso Ibile account</h3>
           
            <hr class="text-white">
                <div class="input">
                    <label class="lbl" for="">Email Address</label>
                    <input name="Email" class="input-tag" type="email">
                    @error('Email') <p class="text-danger">{{$message}}</p> @enderror
                </div>

                <div class="input">
                    <label class="lbl" for="">Password</label>
                    <input name="Password" class="input-tag" type="password">
                    @error('Password') <p class="text-danger">{{$message}}</p> @enderror
                </div>
               
                <div class="input">
                  <button class="button" name="Login" type="submit">Login</button>
                </div>
                <div class="input">
                   <a href="/" class="cancel">Cancel</a>
                </div>
            </form>
    </section>
@endsection
    
</body>
</html>