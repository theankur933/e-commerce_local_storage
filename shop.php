<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>Print Nexa | Shop</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Custom Fonts Css-->
    <link href="css/fonts.css" rel="stylesheet" media="screen">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <?php include 'header.php' ?>
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Products</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Products Start -->
    <div class="page-products">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category Filter Header Start -->
                        <div class="product-category-filter-header wow fadeInUp">
                            <div class="product-category-filter-title">
                                <img src="images/icon-filter.svg" alt="">
                                <h2>Filter By</h2>
                            </div>
                            <div class="product-category-filter-clear-btn">
                                <a href="">Clear All</a>
                            </div>
                        </div>
                        <!-- Page Category Filter Header End -->

                        <!-- Product Category Item List Start -->
                        <div class="product-category-item-list">
                            <!-- Product Category Item Start -->
                            <div class="product-category-item wow fadeInUp" data-wow-delay="0.2s">
                                <!-- <h2 class="product-category-item-title">Genres</h2> -->
                                <ul>
                                    <li>
                                        <input type="checkbox" id="Fiction" name="genres" value="Fiction">
                                        <label for="Fiction">All (35)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Mystery_&_thriller" name="genres" value="Mystery_&_thriller">
                                        <label for="Mystery_&_thriller">Ink (5)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Romance" name="genres" value="Romance">
                                        <label for="Romance">Toner (10)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Fantasy" name="genres" value="Fantasy">
                                        <label for="Fantasy">Paper (5)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Science_fiction" name="genres" value="Science_fiction">
                                        <label for="Science_fiction">Cables (7)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Science_fiction" name="genres" value="Science_fiction">
                                        <label for="Science_fiction">Wireless (9)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Science_fiction" name="genres" value="Science_fiction">
                                        <label for="Science_fiction">Care kits (13)</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Science_fiction" name="genres" value="Science_fiction">
                                        <label for="Science_fiction">Hardware (17)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Category Item End -->
                        </div>
                        <!-- Product Category Item List End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-xl-9 col-lg-8">
                    <!-- Product item List Box Start -->
                    <div class="product-item-list-box">
                        <!-- Product Category Filter Header Start -->
                        <div class="product-category-filter-header wow fadeInUp">
                            <div class="product-category-filter-title">
                                <h2>Showing all results</h2>
                            </div>
                            <div class="product-category-result-info">
                                <div class="product-category-sorting-list">
                                    <select name="sorting_list" class="form-control form-select" id="sorting_list" required>
                                        <option value="" disabled selected>Default Sorting</option>
                                        <option value="Low_to_High">Low to High</option>
                                        <option value="High_to_Low">High to Low</option>
                                        <option value="Popularity">Popularity</option>
                                        <option value="Best_Sellers">Best Sellers</option>
                                        <option value="Trending">Trending</option>
                                        <option value="Most_Reviewed">Most Reviewed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Product Category Filter Header End -->

                        <!-- Product Item List Start -->
                        <div class="product-item-list">
                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/ink-black.jpg" alt="HP 67XL Black Ink Cartridge">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('HP 67XL Black Ink Cartridge', 79.00, 'images/ink-black.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">HP 67XL Black Ink Cartridge</a></h2>
                                    <p class="product-item-author">Ink</p>
                                    <h3 class="product-item-price">$79.00 <span>$84.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/ink-color.jpg" alt="HP 67XL Tri-Color Ink">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('HP 67XL Tri-Color Ink', 89.00, 'images/ink-color.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">HP 67XL Tri-Color Ink</a></h2>
                                    <p class="product-item-author">Ink</p>
                                    <h3 class="product-item-price">$89.00 <span>$92.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/ink-canon.jpg" alt="Canon PG-245XL Black Ink">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('Canon PG-245XL Black Ink', 52.00, 'images/ink-canon.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">Canon PG-245XL Black Ink</a></h2>
                                    <p class="product-item-author">Ink</p>
                                    <h3 class="product-item-price">$52.00 <span>$53.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/ink-combo.jpg" alt="Epson 212XL Ink Combo Pack">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('Epson 212XL Ink Combo Pack', 47.00, 'images/ink-combo.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">Epson 212XL Ink Combo Pack</a></h2>
                                    <p class="product-item-author">Ink</p>
                                    <h3 class="product-item-price">$47.00 <span>$49.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/toner.jpg" alt="Brother TN-760 High-Yield Toner">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('Brother TN-760 High-Yield Toner', 89.00, 'images/toner.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">Brother TN-760 High-Yield Toner</a></h2>
                                    <p class="product-item-author">Toner</p>
                                    <h3 class="product-item-price">$89.00 <span>$92.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/toner-pack.jpg" alt="High-Yield Toner 3-Pack">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('High-Yield Toner 3-Pack', 99.00, 'images/toner-pack.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">High-Yield Toner 3-Pack</a></h2>
                                    <p class="product-item-author">Toner</p>
                                    <h3 class="product-item-price">$99.00 <span>$49.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1.2s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/photo-paper.jpg" alt="Premium Photo Paper 4×6 (100 sheets)">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('High-Yield Toner 3-Pack', 79.00, 'images/photo-paper.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">Premium Photo Paper 4×6 (100 sheets)</a></h2>
                                    <p class="product-item-author">Paper</p>
                                    <h3 class="product-item-price">$79.00 <span>$84.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1.4s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/copy-paper.jpg" alt="Multipurpose Copy Paper (500 sheets)">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('Multipurpose Copy Paper (500 sheets)', 89.00, 'images/copy-paper.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">Multipurpose Copy Paper (500 sheets)</a></h2>
                                    <p class="product-item-author">Paper</p>
                                    <h3 class="product-item-price">$89.00 <span>$92.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1.6s">
                                <div class="product-item-header">
                                    <div class="product-item-image">
                                        <a href="product-single.php">
                                            <figure>
                                                <img src="images/usb-cable.jpg" alt="USB-A to USB-B Printer Cable (6 ft)">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-item-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    onclick="addToCart('USB-A to USB-B Printer Cable (6 ft)', 49.00, 'images/usb-cable.jpg')">
                                                    <img src="images/icon-cart-primary.svg" alt="Add to Cart">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="product-single.php">USB-A to USB-B Printer Cable (6 ft)</a></h2>
                                    <p class="product-item-author">Cables</p>
                                    <h3 class="product-item-price">$49.00 <span>$49.00</span></h3>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <!-- Product Item List End -->

                        <!-- Product Leader More Button Start -->
                        <div class="product-learn-more-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="" class="btn-default">Load More</a>
                        </div>
                        <!-- Product Leader More Button End -->
                    </div>
                    <!-- Product item List Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products End -->

    <?php include 'footer.php' ?>
    <script src="js/addToCart.js"></script>
    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
</body>

</html>