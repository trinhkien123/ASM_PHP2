<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <title>Home</title>
    <style>
           table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>

</head>

<body>
    <table class="table table-striped border">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMG THUMBNAIL</th>
                <th>NAME</th>
                <th>Category Name</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>
                        <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">
                    </td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['c_name'] }}</td>
                    <td>{{ $product['created_at'] }}</td>
                    <td>{{ $product['updated_at'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
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
