<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="login">
        <h1 class="judul">LOGIN</h1>
        <form action="{{url('/login')}}" method="POST">
            @method('POST')
            @csrf
            <input type="text" class="input-box" placeholder="Enter Your Username" name="username">
            <input type="password" class="input-box" placeholder="Enter Your Password" name="password">

            <button type="sumbit" class="login-btn" name="submit">Login</button>

            <p class="link">Tidak punya akun / belum daftar? <a href="{{url('/register')}}" class="daftar">DAFTAR DISINI</a></p>
        </form>
    </div>

</body>
</html>