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
    <title>Priests List</title>
    <style>
        .user-table {
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .user-table th, .user-table td {
            text-align: left;
            padding: 8px;
        }

        .user-table-header {
            background-color: #4CAF50;
            color: white;
        }

        .user-table tr:nth-child(even) {
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
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    <li><a href="{{ route('funerals.index') }}">Funerals</a></li>
                    <li><a href="{{ route('coffins.index') }}">Coffins</a></li>
                    <li><a href="{{ route('churches.index') }}">Churches</a></li>
                    <li><a href="#">Logout</a></li>
                    {{-- {{ route('logout') }} --}}
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Priests List</h1>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('priests.create') }}" class="btn btn-primary">Add new priest</a>
                <table class="table mt-3 user-table">
                    <thead>
                        <tr class="user-table-header">
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Religion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($priests as $priest)
                            <tr>
                                <td>{{ $priest->name }}</td>
                                <td>{{ $priest->surname }}</td>
                                <td>{{ $priest->religion }}</td>
                                <td>
                                    <a href="{{ route('priests.show', $priest) }}" class="btn btn-info btn-sm">Details</a>
                                    <a href="{{ route('priests.edit', $priest) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('priests.destroy', $priest) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
