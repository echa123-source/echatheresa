<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tautkan file CSS -->
    <!-- Link Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<body>
    <!-- Bagian Header -->
    <section class="header" style="background-color: #1E90FF;">
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
       <h1 style="color: white;">about us</h1>
    </div>







<!--about section start-->

<section class="about">
   <div class="image">
     <img src="images/kelingking.jpg" alt=""> 
   </div>
<div class="content">
    <h3>why choose us?</h3>
    <p>Welcome to Fenansi Travel Co, your trusted partner to explore the beauty of the world! We are a professional travel agency that camps to provide the best travel experience, from private tours, vacation packages, to exciting activities that will make your trip unforgettable.</p>
    <p>With personalized service, our team is committed to providing comfort, convenience and safety during your trip. From beaches to mountains, from culture to adventure, we are ready to help you explore every dream destination.</p>
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
        </div>

        <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guided service</span>
        </div>

        

    </div>
    
</div>    
</section>



<!-- about section ensd-->






<!--reviews section start-->


<section class="reviews">
<h3>CLIENT REVIEW</h3>
  <div class="swiper reviews-slider">

    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>The service provided was very satisfying, from delivery to return. The driver and guide were very friendly and informative, making our trip even more memorable.</p>
        <h3>James Come Rihi</h3>
        <span>Traveler</span>
        <img src="images/James.jpg" alt="James Come Rihi traveler">
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>The tour planned by this travel agent went perfectly. All the details were well taken care of, and we did not experience any problems during the trip.</p>
        <h3>Incces</h3>
        <span>Traveler</span>
        <img src="images/inces.jpg" alt="Incces traveler">
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Our family vacation was an unforgettable experience thanks to the friendly and professional service from your travel agent. We highly recommend this service to anyone who wants to travel without any hassle.</p>
        <h3>Jessi Juita</h3>
        <span>Traveler</span>
        <img src="images/kosek.jpg" alt="Jessi Juita traveler">
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>The service at Fenansi Travel Co was really great. The facilities were good, and the team was excellent. Especially the customer service, which is quick to respond and very friendly. Highly recommended.</p>
        <h3>Cyy</h3>
        <span>Traveler</span>
        <img src="images/cyy.jpg" alt="Cyy traveler">
      </div>

      <!-- Slide 5 -->
      <div class="swiper-slide slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>The rented unit is very nice and clean. You made the right choice, and the service provided is excellent. Keep improving and always be successful!</p>
        <h3>Gusmang</h3>
        <span>Traveler</span>
        <img src="images/gusmang.jpg" alt="Gusmang traveler">
      </div>
    </div>
  </div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper(".reviews-slider", {
    loop: true,  // Membuat slider berputar tanpa henti
    spaceBetween: 20,  // Jarak antar slide
    grabCursor: true,  // Mengaktifkan kursor geser
    autoplay: {
      delay: 3000,  // Interval untuk slider berpindah secara otomatis
      disableOnInteraction: false,  // Menjaga autoplay meskipun ada interaksi
    },
    slidesPerView: 1,  // Jumlah slide yang tampil di layar
    centeredSlides: true,  // Menempatkan slide yang sedang aktif di tengah
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
});
</script>

</section>






<!--reviews section ends-->






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
