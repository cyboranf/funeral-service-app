<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Coffins List</title>
    <style>
        .coffins-table {
            background-color: #f9f9f9;
            border-collapse: collapse;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .coffins-table th,
        .coffins-table td {
            padding: 12px 8px;
            text-align: left;
        }

        .coffins-table-header {
            background-color: #dcdcdc;
            color: #333333;
        }

        .coffins-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            border-radius: 5px;
            padding: 5px 10px;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }

        .btn-info {
            background-color: #2196F3;
            color: white;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
        }

        .full-width {
            width: 100%;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .sub-header {
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about2') }}">About</a></li>
                    <li><a href="{{ route('users2.index') }}">Users</a></li>
                    <li><a href="{{ route('priests2.index') }}">Priests</a></li>
                    <li><a href="{{ route('funerals2.index') }}">Funerals</a></li>
                    <li><a href="{{ route('churches2.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Coffins List</h1>
    </section>

    <div class="container">
        <table class="coffins-table">
            <thead>
                <tr class="coffins-table-header">
                    <th>ID</th>
                    <th>Material</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coffins as $coffin)
                    <tr>
                        <td>{{ $coffin->id }}</td>
                        <td>{{ $coffin->material }}</td>
                        <td>{{ $coffin->color }}</td>
                        <td>{{ $coffin->size }}</td>
                        <td>{{ $coffin->price }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('coffins2.show', $coffin) }}" class="btn btn-info">Details</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>
