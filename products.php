<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Shop</h2>
            <p>Shop with us!</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">


            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Grocery</li>
                    <li data-filter=".filter-card">Electronics</li>
                    <li data-filter=".filter-web">Books and Stationery</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">




            <?php $sql = " SELECT *FROM products ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="<?php echo $row["Weight"]; ?>" class="img-fluid" alt="" />
                    <div class="portfolio-links">
                        <a href="<?php echo $row["Weight"]; ?>" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="<?php echo $row["Name"]; ?>"><i
                                class="bi bi-plus"></i></a>
                        <a href="logic.php?id=<?php echo $row["id"]  ?>"><i class="bi bi-cart"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4><?php echo $row["Name"]; ?></h4>
                        <p><?php echo $row["Price"] . "GHS"; ?></p>
                    </div>
                </div>
            </div>

            <?php
                }
            } ?>

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card"> -->
            <!-- <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="" />
                <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                </div>
            </div> -->
        </div>


    </div>
    </div>
</section>


<!-- ... Your existing HTML code ... -->

<script>
var cartItems = [];


// Function to check if an item is already in the cart
function isItemInCart(name) {
    for (var i = 0; i < cartItems.length; i++) {
        if (cartItems[i].name === name) {
            return true;
        }
    }
    return false;
}

// Function to handle "Add Cart" click
function addToCart(name, description, weight) {
    if (!isItemInCart(name)) {
        cartItems.push({
            name: name,
            description: description,
            weight: weight
        });
        console.log("Item added to cart:", name);
    } else {
        console.log("Item already in cart:", name);
    }
    console.log("Cart items:", cartItems);

    // AJAX call to send the cartItems array to the PHP script
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful
                console.log("Data sent to PHP and response received.");
            } else {
                // Request failed
                console.error("Failed to send data to PHP.");
            }
        }
    };

    xhr.send(JSON.stringify(cartItems));
}

document.addEventListener("DOMContentLoaded", function() {
    // Find all the "Add Cart" links
    var addToCartLinks = document.querySelectorAll("a[title='Add Cart']");

    // Attach click event listeners to each "Add Cart" link
    addToCartLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            var portfolioInfo = this.closest(".portfolio-wrap").querySelector(
                ".portfolio-info");
            var name = portfolioInfo.querySelector("h4").textContent;
            var description = portfolioInfo.querySelector("p").textContent;
            var weight = this.closest(".portfolio-wrap").querySelector("img").src;

            // Call the function to add the item to the cart
            addToCart(name, description, weight);
        });
    });
});
</script>