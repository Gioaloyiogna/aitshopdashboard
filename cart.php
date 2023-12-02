<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>AIT-SHOP - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Ninestars
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
    include('header.php');

    ?>
    <!--=======Portfolio Section=======-->
    <section id="portfolio" class="portfolio" style="margin-top: 3%;">

        <div class="container" data-aos="fade-up">
            <div class="d-flex justify-content-center">
                <div class="section-title">

                    <p>Cart</p>

                </div>
                <div>

                    <p style="font-size: large; color:#eb5d1e">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['itemsadded'])) {

                            foreach ($_SESSION['itemsadded'] as $item) {

                                $sql = " SELECT *FROM products where id='$item'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $total += $row["Price"];
                                    }
                                }
                            }
                            echo $total . "GHS";
                        } else {
                            echo 0;
                        }

                        ?></p>

                </div>
            </div>

            <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Grocery</li>
                        <li data-filter=".filter-card">Electronics</li>
                        <li data-filter=".filter-web">Books and Stationery</li>
                    </ul>
                </div>
            </div> -->

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php
                if (isset($_SESSION['succesmsg']) && !empty($_SESSION['succesmsg'] )) {
                ?>
                <div style="display:flex; justify-content:center; background-color:#eb5d1e;color:white"> Order
                    placed
                    successfully";
                </div>

                <?php
                }

                if (isset($_SESSION['itemsadded'])) {

                    foreach ($_SESSION['itemsadded'] as $item) {

                        $sql = " SELECT *FROM products where id='$item'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                <div class="col-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="<?php echo $row["Weight"] ?>" class="img-fluid" alt="" />
                        <div class="portfolio-links">
                            <!-- <a href="" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="App 1">
                                <i class="bi bi-plus"></i>

                            </a> -->
                            <!-- <span style="font-size: 2rem; color:white">12</span>

                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-dash"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <h4><?php echo $row["Description"] ?></h4>
                            <p><?php echo $row["Price"] ?></p>
                            <td><a href="logic.php?delete=<?php echo $row["id"]  ?>" class="delete-item"
                                    style="background-color: #eb5d1e; border:none;color:white; margin:5px; padding:4px 6px">Delete</a>

                        </div>
                    </div>
                </div>
                <?php

                            }
                        }
                    }
                } else {
                    ?> <div>cart is empty
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!--=======Portfolio Section End=======-->
    <?php
    if ($_SESSION['itemsadded']) {
    ?>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <span>Please, fill in the form below to place order.</span>

            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>We only package your orders after payment has been made.</h4>

                        </div>



                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Contact our shop for payment confirmation</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-cash"></i>
                            <h4>Make payment</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form action="logic.php" method="post" role="form" class="formstyle">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name">Your First Name</label>
                                <input type="text" name="fname" class="form-control" id="name"
                                    placeholder="Your First Name" required />
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <label for="lname">Your Last Name</label>
                                <input type="text" class="form-control" name="lname" id="name"
                                    placeholder="Your Last Name" required />
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Address</label>
                            <input type="text" class="form-control" name="adddress" id="subject" placeholder="Address"
                                required />
                        </div>



                        <div class="text-center">
                            <button type="submit" name="order">Order</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <?php
    }
    ?>
    <?php
    include('footer.php')

    ?>
    <!-- Vendor JS Files -->
    <script src=" assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>