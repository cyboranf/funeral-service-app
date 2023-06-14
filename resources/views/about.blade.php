<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Funeral</title>
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
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

    <!---About us content-->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Welcome to Our Funeral Services</h1>
                <p>
                    At Funeral Services, we are dedicated to providing compassionate and professional funeral arrangements. With our extensive experience and expertise, we ensure that each funeral service is tailored to honor the life and memory of your loved one.
                </p>
                <a href="#" class="hero-btn red-btn">Explore Now</a>
            </div>
            <div class="about-col">
                <img src="{{ asset('images/about/about-1.jpg') }}" alt="About Us Image" />
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>
            Funeral Services is a trusted provider of funeral arrangements, committed to supporting families during their time of loss. Our caring team of professionals is dedicated to ensuring that every aspect of the funeral service is handled with dignity, respect, and attention to detail.
        </p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Kido Chan</p>
    </section>

    <!-- Javascript for toggle menu-->
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
