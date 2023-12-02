<?php include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>AIT-SHOP</title>
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
    <!-- ======= Header ======= -->
    <?php
    include('header.php')
    ?>



    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 style="color: white;">Welcome to AIT Shop.A place everyone wants to shop.</h1>
                    
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img
              src="assets/img/general/bg.jpg"
              class="img-fluid animated"
              alt=""
            />
          </div> -->
            </div>
            <div><h2 style="color: black">
                        We have everything you need in our shop and we are ready to serve you at anytime.We wish you
                        an amazing experience.Shop with us!

                    </h2></div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in" />
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">About us</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Welcome to Ait Shop, your one-stop destination for all your shopping needs! Conveniently
                            located in Weija, we offer a delightful in-store shopping experience where you can explore a
                            wide range of high-quality products.

                            Can't visit us in person? No worries! Our online shopping platform brings the entire Ait
                            Shop experience to your fingertips, allowing you to browse and purchase from the comfort of
                            your home.

                            At Ait Shop, customer satisfaction is our top priority. Our friendly and knowledgeable staff
                            are always ready to assist you, ensuring you find the perfect items that suit your
                            preferences and requirements.

                            Discover a diverse selection of products, including fashion apparel, electronics, home
                            decor, and much more, all carefully curated to cater to your varied tastes and interests.

                            Join our growing community of happy customers and experience the joy of shopping with Ait
                            Shop today!
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Reliable</h4>
                                <p>
                                    Ait Shop is renowned for its reliability, backed by years of experience in the
                                    retail industry. Their long-standing presence reflects their commitment to providing
                                    consistent and dependable service to customers. Transparency is a core value at Ait
                                    Shop, as seen in their clear policies on returns, refunds, and exchanges, ensuring a
                                    seamless shopping experience. Customers trust Ait Shop for their fair and efficient
                                    handling of any issues.

                                </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Cheap</h4>
                                <p>
                                    Ait Shop prioritizes affordability and takes pride in offering a diverse range of
                                    products at competitive prices. Their strategy includes direct sourcing from
                                    manufacturers and suppliers, cutting out intermediaries to pass on cost savings to
                                    customers. Additionally, bulk purchasing allows them to negotiate favorable prices
                                    and discounts, providing attractive deals and reduced prices to valued shoppers.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Items</h2>
                    <p>Check out our offer</p>

                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">We sell grocery</a></h4>
                            <p class="description">
                                Offering a diverse selection of groceries for all your needs.

                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">we sell elecronics</a></h4>
                            <p class="description">

                                Your go-to destination for high-quality electronics.
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">we sell Clothing and Apparel</a></h4>
                            <p class="description">
                                Elevate your style with our fashionable clothing and appare
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Books and Stationery</a></h4>
                            <p class="description">
                                Explore a world of knowledge and creativity with our books and stationery
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <?php

        include('products.php')

        ?>
        <!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                            What payment methods do you accept?
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                We accept various payment methods, including credit cards, debit cards, cash, and mobile
                                payment options like MTN MOMO, V-Cash, Apple Pay and Google Pay. You can choose the most
                                convenient method at the checkout.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                            Is there a return policy for products?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Yes, we have a hassle-free return policy. If you are not satisfied with your purchase,
                                you can return the product within 30 days of the purchase date, provided it is in its
                                original condition and packaging. Please ensure to keep the receipt or proof of purchase
                                for smooth processing.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                            Can I track my order?<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Yes, for online orders, you will receive a tracking number once the package is shipped.
                                You can use this tracking number to monitor the status of your delivery on our website
                                or the courier's platform.
                            </p>
                        </div>
                    </li>



                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
                            Do you offer gift-wrapping services?
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Yes, we provide gift-wrapping services for most items at a nominal fee. Just let our
                                staff know that you'd like your purchase gift-wrapped, and we'll take care of it for
                                you.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <<!-- End Team Section -->

            <!-- ======= Clients Section ======= -->
            <!-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Clients</h2>
          <p>They trusted us</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section> -->
            <!-- End Clients Section -->

            <!-- ======= Contact Us Section ======= -->
            <?php
            include('contact.php')

            ?>
            <?php
            include('team.php')

            ?>
            <!-- End Contact Us Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>
              Tamen quem nulla quae legam multos aute sint culpa legam noster
              magna
            </p>
            <form action="" method="post">
              <input type="email" name="email" /><input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Smart shop</h3>
                        <p>
                            Block Factory <br />
                            Accra,Ghana<br />
                            <br /><br />
                            <strong>Phone:</strong> +233549904756<br />
                            <strong>Email:</strong> smartshop@gmail.com<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Shop</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Items</a>
                            </li>

                        </ul>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Web Development</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Product Management</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Graphic Design</a>
              </li>
            </ul>
          </div> -->

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>
                           Kindly contact us on our social media handles below.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Smart shop</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>