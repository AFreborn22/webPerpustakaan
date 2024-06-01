<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>

  <!-- link bs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- link js icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="/CSS/admin.css" />

  <link rel="stylesheet" href="/CSS/style.css" />

</head>

<body id="body-pd">
<div class="image-background"></div>
  @include('admin.partials.sidebarAdmin')

  <div class="konten">
    @yield('konten')
  </div>

  <!-- js for icon -->
  <script>
    feather.replace()
</script>

<script src="/js/admin.js"></script>
<!-- js for bs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>