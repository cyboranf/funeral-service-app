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
    <title>Funerals Waiting for Acceptance</title>
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
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    <li><a href="{{ route('priests.index') }}">Priests</a></li>
                    <li><a href="{{ route('funerals.index') }}">Funerals</a></li>
                    <li><a href="{{ route('coffins.index') }}">Coffins</a></li>
                    <li><a href="{{ route('churches.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Funerals Waiting for Acceptance</h1>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table mt-3 user-table full-width">
                    <thead>
                        <tr class="coffins-table-header">
                            <th>ID</th>
                            <th>Deceased Name</th>
                            <th>Deceased Age</th>
                            <th>User ID</th>
                            <th>Coffin ID</th>
                            <th>Church ID</th>
                            <th>Priest ID</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($funerals as $funeral)
                        <tr>
                            <td>{{ $funeral->id }}</td>
                            <td>{{ $funeral->deceased_name }}</td>
                            <td>{{ $funeral->deceased_age }}</td>
                            <td>{{ $funeral->user_id }}</td>
                            <td>{{ $funeral->coffin_id }}</td>
                            <td>{{ $funeral->church_id }}</td>
                            <td>{{ $funeral->priest_id }}</td>
                            <td>{{ $funeral->price }}</td>
                            <td>
                                <!-- Przycisk Accept -->
                                <form action="{{ route('funerals.accept', $funeral) }}" method="POST" style="display: inline-block;">

                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Accept</button>
                                </form>
                                <!-- Przycisk Edit -->
                                <a href="{{ route('funerals.edit', $funeral) }}" class="btn btn-info btn-sm">Edit</a>
                                <!-- Przycisk Delete -->
                                <form action="{{ route('funerals.destroy', $funeral) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this funeral?')">Delete</button>
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
