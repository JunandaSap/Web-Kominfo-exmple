<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Washwiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top:10rem;">
        <img src="{{ asset('image/logo.png') }}" class="backlogo">
        <div class="center">
            <h1>Login</h1>
            <form method="post" action="{{ route('login') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="txt_field">
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass">
                    <a href="/home">Lupa password?</a>
                </div>
                <input type="submit" value="Masuk">
                <button type="button" onclick="window.location.href='/homeGuest'">Guest</button>
            </form>
            <div class="register">
                Belum punya akun? <a href="/signup">Yuk buat akun!</a>
            </div>
        </div>
    </div>
</body>
</html>
