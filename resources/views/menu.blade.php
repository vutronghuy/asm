<!DOCTYPE html>
<html lang="en">

<head>
    <title>menu</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/menu.css">
    {{-- <link rel="stylesheet" href="css/style.css">
     --}}
     <link rel="icon" href="image/lo.png" type="image/x-icon">
</head>

<body>
    <header>
        <a href="/" class="logo"><img src="image/logo.png" alt=""></a>
        <a href="/home" class="lote"><img src="image/lo.png" alt=""></a>
        <a href="/home" class="buger"><img src="image/king.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="/home">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/">Contact</a></li>
        </ul>

        <div class="nav-icon">
            <a href="/"><i class='bx bx-search'></i></a>
            <a href="/"><i class='bx bx-user'></i></a>
            <a href="/cart"><i class='bx bx-cart'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section class="main-menu">
        <div class="down-arrow">
            <a href="#bestseller" class="down"><i class='bx bxs-down-arrow-alt'></i></a>
        </div>
    </section>

    <section class="bestseller-product" id="bestseller">
        <div class="center-text">
            <h1>BestSeller <span>Products</span></h1>
        </div>
        <div class="titlefood">
            <h2>All Products</h2>
            <select>
                <option>Burgers</option>
                <option>Fried & Roasted</option>
                <option>COMBO FOR SHARING</option>
                <option>Fried Chicken</option>
                <option>Drink</option>
            </select>
        </div>



        <div class="products">
            {{-- product1 --}}
            <div class="row">
                <img src="image/best.webp" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo salat lover</h4>
                    <p>59.000 VND</p>
                </div>
            </div>
            {{-- product2 --}}
            <div class="row">
                <img src="image/lover.jpeg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>burger king</h4>
                    <p>79.000 VND</p>
                </div>
            </div>
            {{-- product3 --}}
            <div class="row">
                <img src="image/nhom.jpg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo burger and Chicken</h4>
                    <p>101.000 VND</p>
                </div>
            </div>
            {{-- product4 --}}
            <div class="row">
                <img src="image/egg.jpg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo egg tarts</h4>
                    <p>69.000 VND</p>
                </div>
            </div>
            {{-- product5 --}}
            <div class="row">
                <img src="image/my.png" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo spaghetti chicken</h4>
                    <p>91.000 VND</p>
                </div>
            </div>
            {{-- product6 --}}
            <div class="row">
                <img src="image/Bugers.jpg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Burger BBQ King</h4>
                    <p>70.000 VND</p>
                </div>
            </div>
            {{-- product7 --}}
            <div class="row">
                <a href="/trending"><img src="image/ga.jpg" alt=""></a>
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo Hoang Kim Chicken</h4>
                    <p>150.000 VND</p>
                </div>
            </div>
            {{-- product8 --}}
            <div class="row">
                <img src="image/lote.png" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Loy Set</h4>
                    <p>140.000 VND</p>
                </div>
            </div>
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="contact-info">
            <div class="second">
                <img src="image/lo.png" alt="">
            </div>
            <div class="first-info">
                <img src="image/logo.png" alt="">

                <p>136 Ho Tung Mau Street, <br>KFC Americans 76 fantom Street</p>
                <p>024667477663</p>
                <p>fastfood24@gmail.com</p>

                <div class="social-icon">
                    <a href="/"><i class='bx bxl-facebook'></i></a>
                    <a href="/"><i class='bx bxl-twitter'></i></a>
                    <a href="/"><i class='bx bxl-instagram'></i></a>
                    <a href="/"><i class='bx bxl-youtube'></i></a>
                    <a href="/"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
            <div class="second-info">
                <h4>Support</h4>
                <p>Contact us</p>
                <p>About page</p>
                <p>Privacy</p>
                <p>Question</p>
                <p>Policy</p>

            </div>
            <div class="five">
                <h4>Subcribe</h4>
                <p>Recive updates, hot pick, bestseller</p>
                <p>See you agains</p>
            </div>
        </div>
    </section>

    <div class="end-text">
        <p>Copyright by KFC @2023 VietNam</p>
    </div>

    <script src="js/java.js"></script>
</body>

</html>
