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
    <title>Funeral Create</title>
    <style>
        .user-create-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .user-create-container form {
            margin-top: 20px;
        }

        .user-create-container form .form-group {
            margin-bottom: 20px;
        }

        .user-create-container form label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .user-create-container form input,
        .user-create-container form select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .user-create-container .action-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .user-create-container .action-buttons .btn {
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
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    <li><a href="{{ route('priests.index') }}">Priests</a></li>
                    <li><a href="{{ route('coffins.index') }}">Coffins</a></li>
                    <li><a href="{{ route('churches.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Funeral Create</h1>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-create-container">
                    <h1>Add Funeral</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('funerals.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="deceased_name">Deceased First Name and LastName:</label>
                            <input type="text" name="deceased_name" id="deceased_name" class="form-control" value="{{ old('deceased_name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="deceased_age">Deceased age:</label>
                            <input type="number" name="deceased_age" id="deceased_age" class="form-control" value="{{ old('deceased_age') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="user_id">ID of user:</label>
                            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="coffin_id">ID of coffin:</label>
                            <input type="number" name="coffin_id" id="coffin_id" class="form-control" value="{{ old('coffin_id') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="church_id">ID of church:</label>
                            <input type="number" name="church_id" id="church_id" class="form-control" value="{{ old('church_id') }}">
                        </div>

                        <div class="form-group">
                            <label for="priest_id">ID of priest:</label>
                            <input type="number" name="priest_id" id="priest_id" class="form-control" value="{{ old('priest_id') }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                        </div>

                        <div class="action-buttons">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="{{ route('funerals.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
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
