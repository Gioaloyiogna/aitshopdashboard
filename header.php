<?php



include 'logic.php';

?>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <!-- Logo with the text "Smart shop" and a link to the homepage -->
            <h1 class="text-light">
                <a href="index.html"><span>AIT SHOP</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav id="navbar" class="navbar">
            <!-- Navigation menu with list items -->
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="#services">Items</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Shop</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li>
                    <!-- Link to the cart page with a shopping cart icon and the cartItems.length value (dynamic) -->
                    <a class="getstarted scrollto" href="cart.php">
                        <i class="bx bx-cart" style="font-size: medium; margin-right: 2px"></i>
                        <?php
                        // code...
                        if (isset($_SESSION['itemsadded'])) {
                            countitems();
                        } else {
                            echo 0;
                        }
                        ?></a>
                    </a>
                </li>
            </ul>
            <!-- Mobile navigation toggle icon -->
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>