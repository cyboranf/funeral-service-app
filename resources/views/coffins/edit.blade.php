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
    <title>Coffin Edit</title>
    <style>
        .user-edit-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .user-edit-container form {
            margin-top: 20px;
        }

        .user-edit-container form .form-group {
            margin-bottom: 20px;
        }

        .user-edit-container form label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .user-edit-container form input,
        .user-edit-container form select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .user-edit-container .action-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .user-edit-container .action-buttons .btn {
            margin: 0 5px;
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
                    <li><a href="{{ route('funerals.index') }}">Funerals</a></li>
                    <li><a href="{{ route('churches.index') }}">Churches</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Coffin Edit</h1>
    </section>

    <div class="container">
        <div class="col-md-12">
            <div class="user-edit-container">
                <form action="{{ route('coffins.update', $coffin) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="material">Material:</label>
                        <input type="text" name="material" id="material" class="form-control" value="{{ old('material', $coffin->material) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" name="color" id="color" class="form-control" value="{{ old('color', $coffin->color) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="size">Size:</label>
                        <input type="text" name="size" id="size" class="form-control" value="{{ old('size', $coffin->size) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="priceOfCoffins">Price:</label>
                        <input type="text" name="priceOfCoffins" id="priceOfCoffins" class="form-control" value="{{ old('priceOfCoffins', $coffin->price) }}" required>
                    </div>
                    <div class="action-buttons">
                        <button type="submit" class="btn btn-info">Edit</button>
                        <a href="{{ route('coffins.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
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
