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
    <title>User Details</title>
    <style>
        .user-details-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .user-details-table {
            width: 100%;
            margin: 0 auto;
        }

        .user-details-table th {
            font-weight: 600;
            padding: 10px;
        }

        .user-details-table td {
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

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
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
                    <li><a href="{{ route('funerals.waiting') }}">Requests</a></li>
                    <li><a href="{{ route('priests.index') }}">Priests</a></li>
                    <li><a href="{{ route('funerals.index') }}">Funerals</a></li>
                    <li><a href="{{ route('coffins.index') }}">Coffins</a></li>
                    <li><a href="{{ route('churches.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>User Details</h1>
    </section>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-details-container">
                        <table class="table user-details-table">
                            <tbody>
                                <tr>
                                    <th>First name:</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Last name:</th>
                                    <td>{{ $user->surname }}</td>
                                </tr>
                                <tr>
                                    <th>Birthday:</th>
                                    <td>{{ $user->birthday->format('Y-m-d') }}</td>
                                </tr>
                                <tr>
                                    <th>City:</th>
                                    <td>{{ $user->city }}</td>
                                </tr>
                                <tr>
                                    <th>Role:</th>
                                    <td>{{ $user->role->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="action-buttons">
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
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
