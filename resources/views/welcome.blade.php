<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css" integrity="sha512-Aa+z1qgIG+Hv4H2W3EMl3btnnwTQRA47ZiSecYSkWavHUkBF2aPOIIvlvjLCsjapW1IfsGrEO3FU693ReouVTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            background-image: url("{{ asset('admin/asset/img/apple.jpg') }}");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Figtree, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .auth-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .auth-text {
            margin-bottom: 20px;
            font-size: 16px;
            color: #4a5568;
        }

        .auth-box a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .auth-box a.login {
            background-color: #3490dc;
            color: white;
        }

        .auth-box a.register {
            background-color: #38a169;
            color: white;
        }

        .auth-box a:hover {
            text-decoration: none;
            opacity: 0.8;
        }
    </style>
</head>
<body class="antialiased">
    <div class="auth-box">
        <p class="auth-text "><pre class="fw-bold ">Welcome to our TSP Management! 
If you already have an account, please log in below. If you are new here, please register to get started.</pre></p>
        
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="login">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="login">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="register">Register</a>
                @endif
            @endauth
        @endif
    </div>
</body>
</html>
