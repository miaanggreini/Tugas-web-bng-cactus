<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="assets/css/style5.css">
<link rel="stylesheet" href="assets/css/g.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>

<body>
    <!-- <div class="navbar">
        <ul>
            <li><a href="Main.html">Home</a></li>
            <li><a href="allproduk.html">All Products</a></li>
            <li><a href="howtous.html">How to Treat Cactus</a></li>
            <li><a href="contact_us_gethub.html" class="current-page" >Contact Us</a></li>
        </ul>
    </div> -->
    <div class="navbar">
        <img class="logo" src="assets/img/logo kaktus.png">
        <ul>
            <li><a href="Main.php">Home</a></li>
            <li><a href="product.php">All Products</a></li>
            <li><a href="howtous.php">How to Treat Cactus</a></li>
            <li><a href="contact_us_gethub.php">Contact Us</a></li>
        </ul>
    </div>
    
   <section class="contact-form">
    <h1 class="heading">Contact Us</h1>
    <p class="para">Ingin menanyakan sesuatu? Yuk jangan sungkan untuk menghubungi admin kami :)</p>
    
    
    <div class="contactForm">
        <form action="process_contact_form.php" method="post">
            <h1 class="sub-heading">Butuh Bantuan?</h1>
            <p class="para para2">Jangan ragu untuk mengirimkan pesan kepada kami.</p>
            <input type="text" class="input" placeholder="your name" name="name">
            <input type="email" class="input" placeholder="your email" name="email">
            <input type="text" class="input" placeholder="your Subject" name="subject">
            <textarea class="input" cols="30" rows="5" placeholder="Your message..." name="message"></textarea>
            <input type="submit" class="input submit" value="Send Message">
        </form>


        <div class="map-container">
            <div class="mapBg"></div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.755948385524!2d110.33736569999999!3d-7.7093165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f0e9591a465%3A0xe2a179152c9b4c7f!2sArdana%20Garden!5e0!3m2!1sid!2sid!4v1715868758891!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="contactMethod">
        <div class="method">
            <i class="fa-solid fa-location-dot contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Location</h1>
                <p class="para">B&G cactus</p>
            </article>
        </div>
        <div class="vertical-line"></div>
        <div class="method">
            <i class="fa-solid fa-envelope contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Email</h1>
                <p class="para">Email:B&GCactus@gmail.com</p>
            </article>
        </div>
        <div class="vertical-line"></div>
       
        <div class="method">
            <i class="fa-solid fa-phone contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Phone</h1>
                <p class="para">+6285160738688 </p>
            </article>
        </div>
    </div>
   </section>

</body>
</html>