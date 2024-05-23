
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="left">
                <div class="login">ACAKES</div>
                <div class="eula">Sweet and fresh</div>
            </div>
            <div class="right">
              
                <div class="form">
                    <form method="POST" action="{{ route('login.action') }}">
                        @csrf
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger" style="margin-top:100px">{{ $errors->first('email') }}</span>
                        @endif
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <input type="submit" id="submit" value="Submit">
                        <a style="text-align:center; margin-left:75px; text-decoration:none; color:aliceblue" href="{{ route('register') }}">New Acakes</a>
                     
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
