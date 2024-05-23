<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Register</title>
</head>
<style>
    .alert.alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
    }
</style>

<body>
    <div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
                <div class="company-details ">

                    <div class="shadow"></div>
                    <div class="wrapper-1">
                        <div class="logo">
                            <div class="icon-food">

                            </div>
                        </div>
                        <h1 class="title">ACAKES</h1>
                        <div class="slogan">Acakes will deliver the cake to you</div>
                    </div>

                </div>
                <div class="signup-form ">
                    <div class="wrapper-2">
                        <div class="form-title">Sign up today!</div>
                        <div class="form">
                            @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <form action="{{ route('register.action') }}" method="POST">
                                @csrf
                                <p class="content-item">
                                    <label>full name
                                        <input name="name" type="text" placeholder="Name" id="name" required>
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </label>
                                </p>

                                <p class="content-item">
                                    <label>email address
                                        <input type="text" placeholder="acakes@email.com" name="email" id="email" required>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </label>
                                </p>

                                <p class="content-item">

                                    <label>password
                                        <input type="password" placeholder="" name="password" id="password" required>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </label>
                                </p>
                                <button type="submit" class="signup">i want acakes </button>
                                <a href="{{ route('login') }}" class="login">login</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</body>

</html>