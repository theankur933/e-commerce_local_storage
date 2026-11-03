<!-- Preloader Start -->
<!-- <div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon">
            <img src="images/loader.svg" alt="">
        </div>
    </div>
</div> -->
<!-- Preloader End -->
<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <!-- Header Action Box Start -->
            <div class="header-action-box">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.svg" alt="Logo">
                </a>
                <!-- Logo End -->
                <!-- Header Search Form Box Start -->
                <div class="header-search-form-box">
                    <!-- Header Search Form Start -->
                    <form
                        class="header-search-form"
                        id="headerForm"
                        action="#"
                        method="POST">
                        <div class="form-group">
                            <input
                                type="text"
                                name="product"
                                class="form-control"
                                placeholder="Search By Products..."
                                required>
                            <button type="submit" class="header-search-btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Header Search Form End -->
                </div>
                <!-- Header Search Form Box End -->
                <!-- Header Action Details Start -->
                <div class="header-action-details mobile-hide">
                    <ul>
                        <!-- <li>
                            <a href="">
                                <img src="images/icon-user.svg" alt="">Account
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/icon-wishlist-primary.svg" alt="">Wishlist
                            </a>
                        </li> -->
                        <li>
                            <a href="cart.php" class="header-cart">
                                <span class="cart-icon-wrapper">
                                    <img src="images/icon-cart-primary.svg" alt="Cart">
                                    <span id="cart-count" class="cart-count">0</span>
                                </span>
                                Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Header Action Details End -->
            </div>
            <!-- Header Action Box End -->
            <!-- Main Menu Start -->
            <div class="main-menu">
                <div class="collapse navbar-collapse">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.php">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="knowledge.php">Knowledge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li>
                                <span class="header-action-details desktop-hide">
                                    <!-- <a href="">Account</a>
                                    <a href="">Wishlist</a> -->
                                    <a href="cart.php">Cart</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="header-action-details">
                        <ul>
                            <li>
                                <a href="contact.php">Get Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-toggle"></div>
            </div>
            <!-- Main Menu End -->
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->