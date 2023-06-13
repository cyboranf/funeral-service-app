<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Funeral</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        .facility-table {
            background-color: #f9f9f9;
            border-collapse: collapse;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .facility-table th,
        .facility-table td {
            padding: 12px 8px;
            text-align: left;
        }

        .facility-table-header {
            background-color: #dcdcdc;
            color: #333333;
        }

        .facility-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <section class="header">
        <nav>
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" /></a>
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

        <div class="text-box">
            <h1>Biggest Funeral Services</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nobis
                vel nam dignissimos nihil assumenda nulla? Voluptatum doloribus illum
                reprehenderit soluta quidem pariatur quas repellat quod, odio, totam
                voluptates obcaecati!
            </p>
            <a href="#" class="hero-btn">Visit Us</a>
        </div>
    </section>

    <!-- Past Funerals -->
    <section class="facility">
        <h1>Today We Remember the Deceased</h1>
        <table class="facility-table">
            <thead>
                <tr class="facility-table-header">
                    <th>Deceased Name</th>
                    <th>Death Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pastFunerals as $funeral)
                    <tr>
                        <td>{{ $funeral->deceased_name }}</td>
                        <td>{{ $funeral->death_date}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <!-- Facility -->
    <section class="facility">
        <h1>Our Facility</h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur
            unde quo, adipisci ab perspiciatis eveniet fugit, nam facere aspernatur
            labore atque illo accusamus asperiores exercitationem culpa minus? Vero,
            harum. Molestias!
        </p>
        <div class="row">
            <div class="facility-col">
                <img src="{{ asset('images/facility/faci-1.jpg') }}" />
                <div class="layer">
                    <h3>Facility 1</h3>
                </div>
            </div>
            <div class="facility-col">
                <img src="{{ asset('images/facility/faci-2.jpg') }}" />
                <div class="layer">
                    <h3>Facility 2</h3>
                </div>
            </div>
            <div class="facility-col">
                <img src="{{ asset('images/facility/faci-3.jpg') }}" />
                <div class="layer">
                    <h3>Facility 3</h3>
                </div>
            </div>
        </div>
    </section>

    <!--- Coffin --->
    <section class="coffin">
        <h1>Our Coffin</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sunt
            dignissimos ad odio maiores porro rerum suscipit deleniti ipsum quis
            consequuntur iusto, velit rem, neque perferendis veniam laudantium magni
            laborum.
        </p>
        <div class="row">
            <div class="coffin-col">
                <img src="{{ asset('images/coffin/coffin-1.jpg') }}" />
                <h3>Basic Coffin</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt
                    minima, molestiae ducimus amet facere tempore commodi, ipsum
                    aspernatur quidem blanditiis eligendi magni quo quas nesciunt. Ab
                    inventore sit rerum provident.
                </p>
            </div>
            <div class="coffin-col">
                <img src="{{ asset('images/coffin/coffin-1.jpg') }}" />
                <h3>Basic Coffin</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt
                    minima, molestiae ducimus amet facere tempore commodi, ipsum
                    aspernatur quidem blanditiis eligendi magni quo quas nesciunt. Ab
                    inventore sit rerum provident.
                </p>
            </div>
            <div class="coffin-col">
                <img src="{{ asset('images/coffin/coffin-1.jpg') }}" />
                <h3>Basic Coffin</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt
                    minima, molestiae ducimus amet facere tempore commodi, ipsum
                    aspernatur quidem blanditiis eligendi magni quo quas nesciunt. Ab
                    inventore sit rerum provident.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial">
        <h1>What Our Customer Says</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
            provident repudiandae, asperiores perspiciatis inventore tenetur magnam
            optio, quos ipsum cumque sequi eaque odio voluptate dicta delectus fuga
            porro aspernatur omnis?
        </p>
        <div class="row">
            <div class="testimonial-col">
                <img src="{{ asset('images/testimonial/cus-1.jpg') }}" />
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                        mollitia alias id, commodi aspernatur fuga soluta nesciunt
                        repellat sed illum reiciendis dignissimos nulla dolorum aliquid.
                        Dolores eius animi velit. Eveniet.
                    </p>
                    <h3>Maria Kur</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="{{ asset('images/testimonial/cus-1.jpg') }}" />
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                        mollitia alias id, commodi aspernatur fuga soluta nesciunt
                        repellat sed illum reiciendis dignissimos nulla dolorum aliquid.
                        Dolores eius animi velit. Eveniet.
                    </p>
                    <h3>Maria Kur</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <h1>Message for your reservation.</h1>
        <a href="#" class="hero-btn">Contact Us</a>
    </section>
    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum
            repellendus suscipit enim quos consequatur commodi tempora autem,<br />
            distinctio vero recusandae, praesentium aut dolores, quibusdam
            doloremque quam debitis sunt deserunt vitae!
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
