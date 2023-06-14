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
        .form-container {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    margin-top: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 20px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

        .facility {
            position: relative;
            margin-bottom: 50px;
        }

        .facility h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .facility p {
            text-align: center;
            margin-bottom: 30px;
        }

        .facility .row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .facility-col {
    position: sticky;
    top: 0;
    width: 300px;
    height: 200px;
    overflow: hidden;
    border-radius: 10px;
}


        .facility-col img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .facility-col .layer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            transform: translateY(100%);
            transition: transform 0.5s;
        }

        .facility-col:hover img {
            transform: scale(1.1);
        }

        .facility-col:hover .layer {
            transform: translateY(0);
        }

        .facility-col h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
        }

        .facility-col .layer:before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 10px 10px 0 10px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 0.7) transparent transparent transparent;
        }

        .facility-col .layer:after {
            content: "";
            position: absolute;
            top: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
        }

        .facility-col .layer h3 {
            margin-top: 10px;
        }

        .facility-col .layer p {
            font-size: 14px;
        }

        .facility-col .layer a {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .facility-col .layer a:hover {
            background-color: #45a049;
        }

        .facility-col .layer form {
            margin-top: 10px;
        }

        .facility-col .layer form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .facility-col .layer form input,
        .facility-col .layer form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .facility-col .layer form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .facility-col .layer form button:hover {
            background-color: #45a049;
        }

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

        .coffin {
            text-align: center;
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .coffin h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .coffin p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .coffin .row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .coffin-col {
            text-align: center;
            max-width: 300px;
        }

        .coffin-col img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .coffin-col h3 {
            margin-top: 20px;
            font-size: 18px;
            font-weight: 500;
        }

        .coffin-col p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .testimonial {
            text-align: center;
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .testimonial h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .testimonial p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .testimonial .row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .testimonial-col {
            text-align: center;
            max-width: 300px;
        }

        .testimonial-col img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .testimonial-col div {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .testimonial-col p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .testimonial-col h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
        }

        .testimonial-col i {
            color: #ff9800;
        }

        .cta {
            text-align: center;
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .cta h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .cta .hero-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta .hero-btn:hover {
            background-color: #45a049;
        }

        .footer {
            text-align: center;
            padding: 50px 0;
            background-color: #333;
            color: #fff;
        }

        .footer h4 {
            margin-bottom: 20px;
        }

        .footer p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .footer .icons {
            margin-bottom: 20px;
        }

        .footer .icons i {
            font-size: 20px;
            margin: 0 5px;
            color: #fff;
        }

        .footer p:last-child {
            margin-bottom: 0;
        }

        .footer i.fa-heart-o {
            color: #ff9800;
        }
    </style>
</head>

<body>
    <section class="header">
        <nav>
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" /></a>
            <div class="nav-links" id="navLinks">
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
        <div class="container">
            <h1>Today We Remember the Deceased</h1>
            <table class="facility-table">
                <thead>
                    <tr>
                        <th>Deceased Name</th>
                        <th>Death Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pastFunerals as $funeral)
                        <tr>
                            <td>{{ $funeral->deceased_name }}</td>
                            <td>{{ $funeral->death_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

  <!-- Request a Funeral Form -->
<section class="facility">
    <div class="container">
        <h1>Request a Funeral</h1>
        <div class="form-container">
            <form action="{{ route('storeFuneral') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="deceased_name">Deceased Name:</label>
                    <input type="text" name="deceased_name" id="deceased_name" required>
                </div>
                <div class="form-group">
                    <label for="deceased_age">Deceased Age:</label>
                    <input type="number" name="deceased_age" id="deceased_age" required>
                </div>
                <div class="form-group">
                    <label for="user_name">Your Name:</label>
                    <input type="text" name="user_name" id="user_name" required>
                </div>
                <div class="form-group">
                    <label for="user_email">Your Email:</label>
                    <input type="email" name="user_email" id="user_email" required>
                </div>
                <div class="form-group">
                    <label for="coffin_id">Select Coffin:</label>
                    <select name="coffin_id" id="coffin_id" required>
                        <option value="">Select Coffin</option>
                        @foreach ($coffins as $coffin)
                            <option value="{{ $coffin->id }}">{{ $coffin->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="church_id">Select Church:</label>
                    <select name="church_id" id="church_id">
                        <option value="">None</option>
                        @foreach ($churches as $church)
                            <option value="{{ $church->id }}">{{ $church->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="priest_id">Select Priest:</label>
                    <select name="priest_id" id="priest_id">
                        <option value="">None</option>
                        @foreach ($priests as $priest)
                            <option value="{{ $priest->id }}">{{ $priest->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="price" value="">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>



    <!-- Coffin -->
    <section class="coffin">
        <div class="container">
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
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="container">
            <h1>What Our Customers Say</h1>
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
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <h1>Message for Your Reservation.</h1>
            <a href="#" class="hero-btn">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p>123 Some Street, City</p>
                    <p>info@funeral.com</p>
                    <p>+1234567890</p>
                </div>
                <div class="footer-col">
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri: 9 AM - 5 PM</p>
                    <p>Sat: 10 AM - 4 PM</p>
                    <p>Sun: Closed</p>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showMenu() {
            var navLinks = document.getElementById("navLinks");
            if (navLinks.style.display === "block") {
                navLinks.style.display = "none";
            } else {
                navLinks.style.display = "block";
            }
        }
    </script>
</body>

</html>

