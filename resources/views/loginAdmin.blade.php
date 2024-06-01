<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/CSS/login.css">

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">

</head>

<body>


    <div class="container2">
        <img src="/ASSETS/logo.svg" alt="Logo Amikom" class="logo">
    </div>

    <div class="container">
        <h3 style="text-align: center;">Hola Admin Kece !</h3><br />

        <form action="{{ route('loginAdmin') }}" method="POST">
            @csrf
            <label for="Username">Username:</label>
            <input type="text" name="Username" required>
        
            <label for="password">Password:</label>
            <input type="password" name="Password" required>
        
            <button class="login" type="submit">Login</button>

            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </form>

</body>

</html>
