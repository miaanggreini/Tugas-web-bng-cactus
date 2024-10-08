<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/f.css">

    
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column; /* Mengubah arah kontainer menjadi vertikal */
            align-items: center; /* Pusatkan elemen horizontal di tengah */
        }
        /* .navbar {
            background-color: #333;
            width: 100%;
            padding: 15px 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: #0a0909;
        }
        .navbar a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
        }
        .navbar a:hover {
            text-decoration: underline;
        } */
        .navbar{ 
    width: 90%;
    padding: 60px;
    height: 20px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #333;    

}
.logo{
    width: 130px;
    margin-top: -10px;
    cursor: pointer;
    border-bottom: #000;
    border-top: #000;
    border-left: #000;
    border-right:#000;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}
.navbar ul li a{
  text-decoration: none;
  text-transform: uppercase;
  color: rgb(255, 255, 255);
  font-weight: 600;
  padding: 15px;
}
li a:hover{
  background: rgb(0, 0, 0);
  transition: 0.5s;
}
.navbar a:hover{
  color: rgb(255, 255, 255);
}
        .cart-icon {
            position: relative;
            cursor: pointer;
        }
        .cart-icon .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: #fff;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-list {
            width: 100%;
            padding: 20px;
        }
        .product-list > h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .product-list-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        .product img {
            max-width: 90px;
            height: 90px;
            width: auto;
        }
        .cart-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .cart {
            background: #fff;
            padding: 20px;
            width: 50%;
            max-height: 80%;
            overflow-y: auto;
            position: relative;
        }
        .cart-item {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .checkout {
            margin-top: 20px;
        }
        .checkout-form {
            margin-bottom: 20px;
        }
        .checkout-form label {
            display: block;
            margin-bottom: 5px;
        }
        .checkout-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .close-cart {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            background: red;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
        }
        .popup-notification {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 1000;
    text-align: center;
}

.popup-notification.active {
    display: block;
}

.popup-notification .close-btn {
    cursor: pointer;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
}

    </style>
</head>
<body>


<div class="navbar">
                <img class="logo" src="assets/img/logo kaktus.png">
                <ul>
                    <li><a href="Main.php">Home</a></li>
                    <li><a href="product.php">All Products</a></li>
                    <li><a href="howtous.php">How to Treat Cactus</a></li>
                    <li><a href="contact_us_gethub.php">Contact Us</a></li>
                </ul>
             <div class="cart-icon" onclick="toggleCart()">
            <!-- <img src="" alt="Cart"> -->
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
            <span id="cart-count" class="cart-count">0</span> <!-- Tambahkan elemen untuk menampilkan jumlah item -->
        </div>
    </div>
    
    

<div class="container">
    <h2>All Products</h2> <!-- Memindahkan judul di luar dari .product-list -->
    <div class="product-list">
        <!-- <h2>Rare Collection</h2> Judul untuk produk terlaris -->
        <div class="product-list">
        <h2>Best Sellers</h2> <!-- Judul untuk produk terlaris -->
        <div class="product-list-grid">
            <div class="product">
                <h3>Haworthia attenuata</h3>
                <img src="assets/Img/kaktus2.jpeg" alt="Product 1">
                <p>Price: Rp80000</p>
                <input type="number" id="quantity-product-1" min="1" value="1">
                <button onclick="addToCart('Haworthia attenuata', 80000, 'assets/Img/5.jpg', document.getElementById('quantity-product-1').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3> Ariocarpus</h3>
                <img src="assets/Img/kaktus3.jpeg" alt="Product 2">
                <p>Price: Rp75000</p>
                <input type="number" id="quantity-product-2" min="1" value="1">
                <button onclick="addToCart('Ariocarpus', 75000, 'assets/Img/5.jpg', document.getElementById('quantity-product-2').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Astrophytum</h3>
                <img src="assets/Img/foto11.jpg" alt="Product 3">
                <p>Price: Rp70000</p>
                <input type="number" id="quantity-product-3" min="1" value="1">
                <button onclick="addToCart('Astrophytum', 70000, 'assets/Img/5.jpg', document.getElementById('quantity-product-3').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Cephalocereus Senilis</h3>
                <img src="assets/Img/foto22.jpg" alt="Product 4">
                <p>Price: Rp70000</p>
                <input type="number" id="quantity-product-4" min="1" value="1">
                <button onclick="addToCart('Cephalocereus Senilis', 70000, 'assets/Img/5.jpg', document.getElementById('quantity-product-4').value)">Add to Cart</button>
            </div>
        </div>
        
        <h2>Rare Collection</h2> <!-- Judul untuk koleksi langka -->
        <div class="product-list-grid">
            <div class="product">
                <h3>Opuntia Microdasys</h3>
                <img src="assets/Img/foto33.jpg" alt="Product 5">
                <p>Price: Rp80000</p>
                <input type="number" id="quantity-product-5" min="1" value="1">
                <button onclick="addToCart('Opuntia Microdasys', 80000, 'assets/Img/5.jpg', document.getElementById('quantity-product-5').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Gymnocalycium Mihanovichii</h3>
                <img src="assets/Img/foto44.jpg" alt="Product 6">
                <p>Price: Rp60000</p>
                <input type="number" id="quantity-product-6" min="1" value="1">
                <button onclick="addToCart('Gymnocalycium Mihanovichii', 60000, 'assets/Img/5.jpg', document.getElementById('quantity-product-6').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Astrophytum Myriostigma</h3>
                <img src="assets/Img/kaktus.jpg" alt="Product 7">
                <p>Price: Rp57000</p>
                <input type="number" id="quantity-product-7" min="1" value="1">
                <button onclick="addToCart('Astrophytum Myriostigma', 57000, 'assets/Img/5.jpg', document.getElementById('quantity-product-7').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Mammillaria Elongata</h3>
                <img src="assets/Img/kaktus1.jpeg" alt="Product 8">
                <p>Price: Rp45000</p>
                <input type="number" id="quantity-product-8" min="1" value="1">
                <button onclick="addToCart('Mammillaria Elongata', 45000, 'assets/Img/5.jpg', document.getElementById('
                quantity-product-8').value)">Add to Cart</button>
            </div>
        </div>

        <h2>Newest Product</h2> <!-- Judul untuk koleksi langka -->
        <div class="product-list-grid">
            <div class="product">
                <h3>Melocactus Azureus</h3>
                <img src="assets/Img/kaktus2.jpeg" alt="Product 5">
                <p>Price: Rp50000</p>
                <input type="number" id="quantity-product-5" min="1" value="1">
                <button onclick="addToCart('Melocactus Azureus', 50000, 'assets/Img/5.jpg', document.getElementById('quantity-product-5').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Mammillaria Fraileana</h3>
                <img src="assets/Img/kaktus3.jpeg" alt="Product 6">
                <p>Price: Rp40000</p>
                <input type="number" id="quantity-product-6" min="1" value="1">
                <button onclick="addToCart('Mammillaria Fraileana', 40000, 'assets/Img/5.jpg', document.getElementById('quantity-product-6').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Kaktus Lilin</h3>
                <img src="assets/Img/kaktus4.jpeg" alt="Product 7">
                <p>Price: Rp30000</p>
                <input type="number" id="quantity-product-7" min="1" value="1">
                <button onclick="addToCart('Kaktus Lilin', 30000, 'assets/Img/5.jpg', document.getElementById('quantity-product-7').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Pilosocereus Pachycladu</h3>
                <img src="assets/Img/kaktus5.jpeg" alt="Product 8">
                <p>Price: Rp50000</p>
                <input type="number" id="quantity-product-8" min="1" value="1">
                <button onclick="addToCart('Pilosocereus Pachycladu', 50000, 'assets/Img/5.jpg', document.getElementById('
                quantity-product-8').value)">Add to Cart</button>
            </div>
        </div>

        <h2>Import Collection</h2> <!-- Judul untuk koleksi langka -->
        <div class="product-list-grid">
            <div class="product">
                <h3>Fairy Castle Cactus</h3>
                <img src="assets/Img/kaktus6.jpeg" alt="Product 5">
                <p>Price: Rp50000</p>
                <input type="number" id="quantity-product-5" min="1" value="1">
                <button onclick="addToCart('Fairy Castle Cactus', 50000, 'assets/Img/5.jpg', document.getElementById('quantity-product-5').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Opuntia microdasys</h3>
                <img src="assets/Img/kaktus7.jpeg" alt="Product 6">
                <p>Price: Rp60000</p>
                <input type="number" id="quantity-product-6" min="1" value="1">
                <button onclick="addToCart('Opuntia microdasys', 60000, 'assets/Img/5.jpg', document.getElementById('quantity-product-6').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Gymnocalycium mihanovichii)</h3>
                <img src="assets/Img/kaktus8.jpeg" alt="Product 7">
                <p>Price: Rp80000</p>
                <input type="number" id="quantity-product-7" min="1" value="1">
                <button onclick="addToCart('Gymnocalycium mihanovichii)', 80000, 'assets/Img/5.jpg', document.getElementById('quantity-product-7').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Hatiora gaertneri</h3>
                <img src="assets/Img/kaktus8.jpeg" alt="Product 8">
                <p>Price: Rp80000</p>
                <input type="number" id="quantity-product-8" min="1" value="1">
                <button onclick="addToCart('Hatiora gaertneri', 80000, 'assets/Img/5.jpg', document.getElementById('
                quantity-product-8').value)">Add to Cart</button>
            </div>
        </div>
        <h2>Local Collections</h2> <!-- Judul untuk koleksi langka -->
        <div class="product-list-grid">
            <div class="product">
                <h3>Kaktus Koboi</h3>
                <img src="assets/Img/foto33.jpg" alt="Product 5">
                <p>Price: Rp35000</p>
                <input type="number" id="quantity-product-5" min="1" value="1">
                <button onclick="addToCart('Kaktus Koboi', 35000, 'assets/Img/5.jpg', document.getElementById('quantity-product-5').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Kaktus Sansevieria</h3>
                <img src="assets/Img/foto44.jpg" alt="Product 6">
                <p>Price: Rp65000</p>
                <input type="number" id="quantity-product-6" min="1" value="1">
                <button onclick="addToCart('Kaktus Sansevieria', 65000, 'assets/Img/5.jpg', document.getElementById('quantity-product-6').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Kaktus Gymno</h3>
                <img src="assets/Img/kaktus.jpg" alt="Product 7">
                <p>Price: Rp50000</p>
                <input type="number" id="quantity-product-7" min="1" value="1">
                <button onclick="addToCart('Kaktus Gymno', 50000, 'assets/Img/5.jpg', document.getElementById('quantity-product-7').value)">Add to Cart</button>
            </div>
            <div class="product">
                <h3>Kaktus Crassula</h3>
                <img src="assets/Img/kaktus1.jpeg" alt="Product 8">
                <p>Price: Rp60000</p>
                <input type="number" id="quantity-product-8" min="1" value="1">
                <button onclick="addToCart('Kaktus Crassula', 60000, 'assets/Img/5.jpg', document.getElementById('
                quantity-product-8').value)">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
</div>

<!-- <div class="cart-overlay" id="cart-overlay">
    <div class="cart">
        <button class="close-cart" onclick="closeCart()">Close</button>
        <h2>Your Cart</h2>
        <div id="cart-items"></div>
        
        <div class="checkout-form" id="checkout-form" style="display: none;">
            <h3>Checkout Information</h3>
            <form id="checkout-form-inner">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">No Telephone:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </form>
        </div>
        
        <div class="checkout">
            <p>Total: Rp<span id="total-price">0</span></p>
            <button onclick="checkout()">Checkout</button>
        </div>
    </div>
</div> -->

<div class="cart-overlay" id="cart-overlay">
    <div class="cart">
        <button class="close-cart" onclick="closeCart()">Close</button>
        <h2>Your Cart</h2>
        <div id="cart-items"></div>
        
        <div class="checkout-form" id="checkout-form" style="display: none;">
            <h3>Checkout Information</h3>
            <form action="proses.php" method="post">
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required> 
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
            <label for="phone">No Telephone:</label>
            <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="checkout">
            <p>Total: Rp<span id="total-price">0</span></p>
                <button type="submit">Pesan</button>
            </div>
        </form>

        </div>

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

<script>
    let cart = [];
    let totalPrice = 0;

    function updateCartCount() {
        const cartCount = document.getElementById('cart-count');
        cartCount.textContent = cart.length;
    }

    function toggleCart() {
        const cartOverlay = document.getElementById('cart-overlay');
        if (cartOverlay.style.display === 'flex') {
            cartOverlay.style.display = 'none';
        } else {
            if (cart.length === 0) {
                const cartItems = document.getElementById('cart-items');
                cartItems.innerHTML = '<p>Keranjang Kosong</p>';
            }
            cartOverlay.style.display = 'flex';
            updateCartCount();
            document.getElementById('checkout-form').style.display = cart.length ? 'block' : 'none';
            document.querySelector('.checkout').style.display = cart.length ? 'block' : 'none';
        }
    }

    function closeCart() {
        document.getElementById('cart-overlay').style.display = 'none';
    }

    function addToCart(productName, productPrice, productImage, quantity) {
        quantity = parseInt(quantity);
        const existingProductIndex = cart.findIndex(item => item.name === productName);
        
        if (existingProductIndex >= 0) {
            cart[existingProductIndex].quantity += quantity;
            cart[existingProductIndex].totalPrice += productPrice * quantity;
        } else {
            cart.push({ name: productName, unitPrice: productPrice, totalPrice: productPrice * quantity, image: productImage, quantity });
        }

        totalPrice += productPrice * quantity;
        updateCart();
        toggleCart();
    }


    function updateCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    if (cart.length === 0) {
        cartItems.innerHTML = '<p>Keranjang Kosong</p>';
    } else {
        cart.forEach(item => {
            const div = document.createElement('div');
            div.className = 'cart-item';
            div.innerHTML = `<img src="${item.image}" alt="${item.name}" width="50"> 
                             ${item.name} - Rp${item.unitPrice.toLocaleString()} (x${item.quantity}) 
                             <button onclick="removeCartItem('${item.name}')">Hapus</button>
                             <button onclick="decreaseQuantity('${item.name}')">-</button>
                             <span>${item.quantity}</span>
                             <button onclick="increaseQuantity('${item.name}')">+</button>`;
            cartItems.appendChild(div);
        });
    }
    document.getElementById('total-price').innerText = totalPrice.toLocaleString();
}

    
    function removeCartItem(productName) {
        const index = cart.findIndex(item => item.name === productName);
        if (index !== -1) {
            const removedItem = cart.splice(index, 1)[0];
            totalPrice -= removedItem.totalPrice;
            updateCart();
            updateCartCount();
        }
    }

    function increaseQuantity(productName) {
        const index = cart.findIndex(item => item.name === productName);
        if (index !== -1) {
            cart[index].quantity++;
            cart[index].totalPrice = cart[index].unitPrice * cart[index].quantity;
            totalPrice += cart[index].unitPrice;
            updateCart();
        }
    }

    function decreaseQuantity(productName) {
        const index = cart.findIndex(item => item.name === productName);
        if (index !== -1 && cart[index].quantity > 1) {
            cart[index].quantity--;
            cart[index].totalPrice = cart[index].unitPrice * cart[index].quantity;
            totalPrice -= cart[index].unitPrice;
            updateCart();
        }
    }

    // function checkout() {
    //     const name = document.getElementById('name').value;
    //     const email = document.getElementById('email').value;
    //     const phone = document.getElementById('phone').value;
    //     const alamat = document.getElementById('alamat').value;

    //     if (name && email && phone && alamat && cart.length > 0) {
    //         const xhr = new XMLHttpRequest();
    //         xhr.open("POST", "koneksi.php", true);
    //         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //         xhr.onreadystatechange = function () {
    //             if (xhr.readyState == 4 && xhr.status == 200) {
    //                 alert(xhr.responseText);
    //                 emptyCart();
    //             }
    //         };
    //         const cartJSON = JSON.stringify(cart);
    //         xhr.send(`name=${name}&email=${email}&phone=${phone}&alamat=${alamat}&cart=${cartJSON}`);
    //     } else {
    //         alert('Silakan isi formulir dan tambahkan produk ke keranjang terlebih dahulu.');
    //     }
    // }

    function checkout() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const alamat = document.getElementById('alamat').value;

    if (name && email && phone && alamat && cart.length > 0) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "koneksi.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.token) {
                    snap.pay(response.token, {
                        onSuccess: function(result) {
                            showPopup();
                            emptyCart();
                        },
                        onPending: function(result) {
                            showPopup();
                            emptyCart();
                        },
                        onError: function(result) {
                            alert('Transaction failed.');
                        }
                    });
                } else {
                    alert('Error: ' + response.error);
                }
            }
        };
        const cartJSON = JSON.stringify(cart);
        xhr.send(`name=${name}&email=${email}&phone=${phone}&alamat=${alamat}&cart=${cartJSON}`);
    } else {
        alert('Silakan isi formulir dan tambahkan produk ke keranjang terlebih dahulu.');
    }
}

function showPopup() {
    const popupNotification = document.getElementById('popupNotification');
    popupNotification.classList.add('active');
}

function closePopup() {
    const popupNotification = document.getElementById('popupNotification');
    popupNotification.classList.remove('active');
}

    function emptyCart() {
        cart = [];
        totalPrice = 0;
        updateCart();
        toggleCart();
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('alamat').value = '';
    }

</script>
<div class="popup-notification" id="popupNotification">
    <h2>Checkout Berhasil!</h2>
    <p>Terima kasih telah berbelanja di toko kami.</p>
    <button class="close-btn" onclick="closePopup()">Tutup</button>
</div>

</body>

</html>