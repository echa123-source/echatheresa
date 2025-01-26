<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tautkan file CSS -->
    <!-- Link Font Awesome untuk Ikon -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <!-- Bagian Header -->
    <<section class="header" style="background-color: #1E90FF;">
    <a href="home.html" class="logo"><b>Fenansi Travel Co</b></a>
    <nav class="navbar">
        <a href="home.html">home</a>
        <a href="about.html">about</a>
        <a href="package.html">package</a>
        <a href="book.html">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>   


    <div class="heading" style="background:url(images/rice.png)no-repeat;">
       <h1 style="color: white;">Book</h1>
    </div>


<!--booking section start-->

<section class="book" style="background-color: #D3D3D3;">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_form.html" method="post" class="book_form">
        <div class="flex">
            <div class="inputBox">
                <label for="name">Name:</label>
    <input type="text" id="name" placeholder="enter your name" name="nama">

    <label for="email">Email:</label>
    <input type="email" id="email" placeholder="enter your email" name="email">

    <label for="phone">Phone:</label>
    <input type="text" id="phone" placeholder="enter your number" name="phone">

    <label for="address">Address:</label>
    <input type="text" id="address" placeholder="enter your address" name="address">

    <label for="where-to">Where To:</label>
    <input type="text" id="where-to" placeholder="place you want to visit" name="location">

    <label for="guests">How Many:</label>
    <input type="number" id="guests" placeholder="number of guests" name="guests">

    <label for="arrival">Arrivals:</label>
    <input type="date" id="arrival" name="arrival">

    <label for="leaving">Leaving:</label>
    <input type="date" id="leaving" name="leaving">

        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>




<!--booking section ends-->








      <!-- Bagian Footer -->
<footer style="background-color: #1E90FF; color: #fff; padding: 20px 0;">

    <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <!-- Quick Links -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h3 style="margin-bottom: 15px; color: #fff;">Quick Links</h3>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Home</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>About</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Package</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Book</a></li>
            </ul>
        </div>
        <!-- Extra Links -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h3 style="margin-bottom: 15px; color: #fff;">Extra Links</h3>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Ask Questions</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>About Us</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Privacy Policy</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Terms Of Use</a></li>
            </ul>
        </div>
        <!-- Contact Info -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h3 style="margin-bottom: 15px; color: #fff;">Contact Info</h3>
            <p style="margin: 5px 0; color: #fff;"><i class="fas fa-phone" style="margin-right: 8px;"></i>+62-813-5309-5070</p>
            <p style="margin: 5px 0; color: #fff;"><i class="fas fa-phone" style="margin-right: 8px;"></i>+62 812-3940-6947</p>
            <p style="margin: 5px 0; color: #fff;"><i class="fas fa-envelope" style="margin-right: 8px;"></i>echatheresa292@Gmail.Com</p>
            <p style="margin: 5px 0; color: #fff;"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>gg. cenggana sari III no.22, sumerta kelod, kec.denpasar timur, kota denpasar, bali</p>
        </div>
        <!-- Follow Us -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h3 style="margin-bottom: 15px; color: #fff;">Follow Us</h3>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Facebook</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Twitter</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>Instagram</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;"><i class="fas fa-angle-right" style="margin-right: 8px;"></i>LinkedIn</a></li>
            </ul>
        </div>
    </div>
    <!-- Horizontal line and footer text -->
    <div style="margin: 20px auto; width: 90%; height: 3px; background-color: #444;"></div>
    <p style="text-align: center; color: #8A2BE2; margin: 0;">Created By Echa Theresa | All Rights Reserved!</p>
</footer>


    <script src="js/script.js"></script>
</body>

</html>
