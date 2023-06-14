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
    <title>Funerals List</title>
    <style>
        .funerals-table {
            background-color: #f9f9f9;
            border-collapse: collapse;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .funerals-table th,
        .funerals-table td {
            padding: 12px 8px;
            text-align: left;
        }

        .funerals-table-header {
            background-color: #dcdcdc;
            color: #333333;
        }

        .funerals-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            border-radius: 5px;
            padding: 5px 10px;
            margin-right: 5px;
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

        .btn-group {
            display: flex;
            align-items: center;
        }

        .btn-group .btn {
            margin-right: 5px;
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
                    <li><a href="{{ route('funerals.waiting') }}">Requests</a></li>
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    <li><a href="{{ route('priests.index') }}">Priests</a></li>
                    <li><a href="{{ route('coffins.index') }}">Coffins</a></li>
                    <li><a href="{{ route('churches.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Funerals List</h1>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('funerals.create') }}" class="btn btn-primary">Add new Funeral</a>
                <table class="table mt-3 user-table full-width">
                    <thead>
                        <tr class="funerals-table-header">
                            <th>ID</th>
                            <th>Deceased</th>
                            <th>Age</th>
                            <th>User</th>
                            <th>Coffin</th>
                            <th>Church</th>
                            <th>Priest</th>
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
                                <td>{{ $funeral->user->name }}</td>
                                <td>{{ $funeral->coffin->material }}</td>
                                <td>{{ $funeral->church->name ?? 'Brak' }}</td>
                                <td>{{ $funeral->priest->name ?? 'Brak' }}</td>
                                <td>{{ $funeral->price }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('funerals.show', $funeral) }}" class="btn btn-info btn-sm">Details</a>
                                        <a href="{{ route('funerals.edit', $funeral) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('funerals.destroy', $funeral) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this funeral?')">Delete</button>
                                        </form>
                                    </div>
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
