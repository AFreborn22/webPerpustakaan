<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Amikom | {{ $title }}</title>
    @yield('style')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body id="body-pd">
    @include('partials.sidebardosen')

    <div>
        @yield('konten')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
</body>
</html>