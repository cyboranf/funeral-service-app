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
    <title>Informations about funeral</title>
    <style>
        .funeral-details-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .funeral-details-table {
            width: 100%;
            margin: 0 auto;
        }

        .funeral-details-table th {
            font-weight: 600;
            padding: 10px;
        }

        .funeral-details-table td {
            padding: 10px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .action-buttons .btn {
            margin: 0 5px;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
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
                    <li><a href="{{ route('coffins2.index') }}">Coffins</a></li>
                    <li><a href="{{ route('churches2.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Informations about funeral</h1>
    </section>

    <div class="funeral-details-container">
        <table class="funeral-details-table">
            <tr>
                <th>ID:</th>
                <td>{{ $funeral->id }}</td>
            </tr>
            <tr>
                <th>Deceased:</th>
                <td>{{ $funeral->deceased_name }}</td>
            </tr>
            <tr>
                <th>Age:</th>
                <td>{{ $funeral->deceased_age }}</td>
            </tr>
            <tr>
                <th>User:</th>
                <td>{{ $funeral->user->name }}</td>
            </tr>
            <tr>
                <th>Coffin:</th>
                <td>{{ $funeral->coffin->material }}</td>
            </tr>
            <tr>
                <th>Church:</th>
                <td>{{ $funeral->church->name ?? 'Brak' }}</td>
            </tr>
            <tr>
                <th>Priest:</th>
                <td>{{ $funeral->priest->name ?? 'Brak' }}</td>
            </tr>
            <tr>
                <th>Price:</th>
                <td>{{ $funeral->price }}</td>
            </tr>
        </table>

        <div class="action-buttons">
            <a href="{{ route('funerals2.index') }}" class="btn btn-secondary">Back</a>
        </div>
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
