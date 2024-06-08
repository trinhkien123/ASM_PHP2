<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <title>Home</title>
</head>

<body>
    <h1>WELCOM {{ $name }} TO WEBSITE</h1>
    <nav>
        @if (!is_logged())
            <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
        @endif

        @if (is_logged())
            <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>
        @endif
    </nav>
</body>

</html>
