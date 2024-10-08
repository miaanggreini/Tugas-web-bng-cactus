<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Design Your Website With Background Video</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/f.css">
        
    </head>
    <body>
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="assets/img/vid kel.mp4" type="video/mp4">
            </video>
            <div class="navbar">
                <img class="logo" src="assets/img/logo kaktus.png">
                <ul>
                    <li><a href="Main.php">Home</a></li>
                    <li><a href="product.php">All Products</a></li>
                    <li><a href="howtous.php">How to Treat Cactus</a></li>
                    <li><a href="contact_us_gethub.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="content">
              <br>
              <br>
              <br>
                <h4>COLLECTIONS </h4>
                
                <div>
                <button type="button" onclick="smoothScroll('#rarecollection')">Rare Collection</button>
                <button type="button" onclick="smoothScroll('#bestseller')">Best Seller</button>
                <button type="button" onclick="smoothScroll('#newestproduct')">Newest Product</button>
                <br>
                <button type="button" onclick="smoothScroll('#importcollection')">Import Collections</button>
                <button type="button" onclick="smoothScroll('#localcollection')">Local Collections</button>
                <script>
                function smoothScroll(target) {
                const element = document.querySelector(target);
                if (element) {
                element.scrollIntoView({
                behavior: 'smooth'
                });
            }
        }
</script>    
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="tentang">
            <h3>Tentang Kami</h3>
        </div>

        <div class="wrapper"> 
            <img src="assets/img/kaktus.jpg" alt="Gambar">
            <div class="text box">
                <p>Saat itu banyak menjamur usaha tanaman hias, dengan beragam jenis tanaman, namun belum ada 
                    yang fokus untuk budidaya dan pemsaran kusus kaktus/sukulen di sekitar DIY ini, berawal 
                    hanya dengan memanfaatkan pekarangan rumah dan belajar otodidak tentang pengembang biakan, 
                    dan perawatannya pada 20 Maret 2018, owner dengan visi misinya bisa bermanfaat dimanapun 
                    bertempat, menggunakan green house nya sebagai tempat mencari rejeki bersama dan tempat 
                    untuk belajar apapun tentang tanaman hias yang unik ini kepada siapapun yang tertarik 
                    memelihara dan menjalankan usaha ini. Sebagai usaha utama ataupum sampingan, dari mulai 
                    edukasi perawatan ke setiap pembeli/calon pemelihara kaktus/sukulen, hingga pengembang biakan 
                    dan pemasaran bagi resellernya yang hingga saat ini ada lebih dari 50 reseller. Dari mulai 
                    menjadi mentor pembelajaran tentang pertanian kaktus/sukulen di sekolah-sekolah ibu-ibu tingkat 
                    RT, desa, sampai binaan dinas, hingga owner diundang/didatangi oleh mahasiswa, media massa, EO, 
                    dan kedinasan untuk manjadi nara sumber di workshop, talkshow, atau penelitian, semua itu dilakukan 
                    owner untuk selalu mengajak/mengedukasi anak-anak muda, agar bisa terbuka pemikirannya, bahwa tanpa 
                    lahan pertanian yg luas, tanpa modal yg besar, siapapun bisa bertani, ya. Bertani dengan gaya milenial.</p>
            </div>
        </div>

        <div class="container" id="rarecollection">
        <h5>Rare Collection</h5>
        <hr>
        <br>
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-rounded">
                <!-- chevron_left -->
            </button>
            <ul class="image-list">
                <img class="image-item" src="assets/img/kaktus1.jpeg" alt="img-1" />
                <img class="image-item" src="assets/img/kaktus2.jpeg" alt="img-2" />
                <img class="image-item" src="assets/img/kaktus3.jpeg" alt="img-3" />
                <img class="image-item" src="assets/img/kaktus4.jpeg" alt="img-4" />
                <img class="image-item" src="assets/img/kaktus5.jpeg" alt="img-5" />
                <img class="image-item" src="assets/img/kaktus6.jpeg" alt="img-6" />
            </ul>
            <button id="next-slide" class="slide-button material-symbols-rounded">
                <!-- chevron_right  -->
            </button>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb"></div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- Best Seller -->
        <div id="bestseller">
            <h5>Best Seller</h5>
            <hr>
            <br>
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_left -->
                </button>
                <ul class="image-list">
                    <img class="image-item" src="assets/img/best1.jpg" alt="img-1" />
                    <img class="image-item" src="assets/img/best2.jpg" alt="img-2" />
                    <img class="image-item" src="assets/img/best3.jpg" alt="img-3" />
                    <img class="image-item" src="assets/img/best4.jpg" alt="img-4" />
                    <img class="image-item" src="assets/img/best5.jpg" alt="img-5" />
                    <img class="image-item" src="assets/img/best6.jpg" alt="img-6" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_right  -->
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>

            <br>
            <br>
            <br>
        </div>

        <!-- Newest Product -->
        <div id="newestproduct">
            <h5>Newest Product</h5>
            <hr>
            <br>
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_left -->
                </button>
                <ul class="image-list">
                    <img class="image-item" src="assets/img/kaktus1.jpeg" alt="img-1" />
                    <img class="image-item" src="assets/img/kaktus2.jpeg" alt="img-2" />
                    <img class="image-item" src="assets/img/kaktus3.jpeg" alt="img-3" />
                    <img class="image-item" src="assets/img/kaktus4.jpeg" alt="img-4" />
                    <img class="image-item" src="assets/img/kaktus5.jpeg" alt="img-5" />
                    <img class="image-item" src="assets/img/kaktus6.jpeg" alt="img-6" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_right  -->
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>

            <br>
            <br>
            <br>
        </div>

        <!--
        <!-- Import Collection -->
        <div id="importcollection">
            <h5>Import Collection</h5>
            <hr>
            <br>
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_left -->
                </button>
                <ul class="image-list">
                    <img class="image-item" src="assets/img/import1.jpeg" alt="img-1" />
                    <img class="image-item" src="assets/img/import2.jpeg" alt="img-2" />
                    <img class="image-item" src="assets/img/import3.jpeg" alt="img-3" />
                    <img class="image-item" src="assets/img/import4.jpeg" alt="img-4" />
                    <img class="image-item" src="assets/img/import5.jpeg" alt="img-5" />
                    <img class="image-item" src="assets/img/import6.jpeg" alt="img-6" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_right  -->
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>

            <br>
            <br>
            <br>
        </div>

        <!-- Local Collection -->
        <div id="localcollection">
            <h5>Local Collection</h5>
            <hr>
            <br>
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_left -->
                </button>
                <ul class="image-list">
                    <img class="image-item" src="assets/img/local1.jpg" alt="img-1" />
                    <img class="image-item" src="assets/img/local2.jpg" alt="img-2" />
                    <img class="image-item" src="assets/img/local3.jpg" alt="img-3" />
                    <img class="image-item" src="assets/img/local4.jpg" alt="img-4" />
                    <img class="image-item" src="assets/img/local5.jpg" alt="img-5" />
                    <img class="image-item" src="assets/img/local6.jpg" alt="img-6" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <!-- chevron_right  -->
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>

            <br>
            <br>
            <br>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-section logo-section">
                <img src="assets/img/logo b&g.jpg" alt="Company Logo" class="logo">
                <h3>B&G Cactus</h3>
                <p></p>
                <p>Kami adalah perusahaan yang berdedikasi untuk memberikan layanan terbaik kepada pelanggan kami.
                    Hubungi kami untuk informasi lebih lanjut.</p>
            </div>
            <div class="footer-section contact-section">
                <h3>Contact Us</h3>
                <p>Email: B&Gcactus@gmail.com</p>
                <p>Telepon: +62 5150 7286 88</p>
                <p>Alamat: Jl. Contoh No. 123, Jakarta</p>
            </div>
            <div class="footer-section links-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="product.php">All Products</a></li>
                    <li><a href="howtous.php">How to Treat Cactus</a></li>
                    <li><a href="contact_us_gethub.php">Contact Us</a></li>
                </ul>
            
            </div>
        </div>
        <div class="footer-bottom">
            <p>Follow us: 
                <a href="https://www.facebook.com/yourpage" target="_blank">Facebook</a> |
                <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a> |
                <a href="https://wa.me/yourwhatsappnumber" target="_blank">WhatsApp</a>
            </p>
        </div>
        <br>
        <p>&copy; 2024 B&G cactus.</p>
    </footer>
    </body>
</html>
