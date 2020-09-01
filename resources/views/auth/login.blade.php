
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="{{asset('frontend/login/style.css')}}">
    
</head>
<body>
    <div class="wrapper">
        <h1>Sign in</h1>
        <form  method="POST" action="{{route('login')}}">
            @csrf
            <input id="email" type="email" placeholder="username" name="email" value="{{ old('email') }}"  autofocus>
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <input id="password" type="password" placeholder="password" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label for="checkbox">Remember me</label> 
            <input type="submit" value="LOGIN">
        </form>
        <div class="bottom-text">
        
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forget password?</a>
            @endif

            <a style="float:right;" href="{{ route('register') }}">New User? Register</a>
         
        </div>

        <div class="socials">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-pinterest"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>

        </div>

    </div>

    <div id="overlay-area">

    </div>

    <script src="https://use.fontawesome.com/c8488f5179.js"></script>
</body>
</html>
