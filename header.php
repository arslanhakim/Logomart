
<?php require_once("./include/session.php"); ?>
<!Doctype >
<Html>
    <head>
        <title> Header Class </title>


    </head>
    <body>
        <?php
        
        $count =0;
        if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
        }
        ?>
                <header   header id="header">
                    <div class="navbar shadow-sm">
                        <div class="container">
                            <div class="navbar-brand d-flex align-items-center">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true"
                                    aria-label="Toggle navigation">
                                    <img src="./images/icon/menu_white.png" class="img-fluid" alt="Menu button">
                                </button>
                                <a href="index.php">
                                    <img src="./images/icon/logo_1.png" class="img-fluid" alt="Logo Mart">
                                </a>
                            </div>
                            <div class="mx-auto product-action-button-box">
                                <ul class="product-action-buttons">
                                    <li type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarHeaderSearch" aria-controls="navbarHeaderSearch" aria-expanded="true"
                                    aria-label="Toggle navigation" class="btn-search">
                                        <a href="#" class="btn">
                                            <img src="./images/icon/search.png" alt="">
                                        </a>
                                    </li>
                                    <li class="btn-like">
                                        <a href="./favourites.php" class="btn">
                                            <img src="./images/icon/wishlist.png" alt="">
                                        </a>
                                    </li>
                                    <li class="btn-cart">
                                        <a href="./cart.php" class="btn">
                                            <img src="./images/icon/cart.png" alt="">
                                            <span class="badge rounded-pill"><?php echo $count; ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-auto d-flex align-items-center btn-account">
                                <div class="dropdown">
                                    <img class="btn dropdown-toggle img-fluid" src="./images/icon/user_login_signup.png"
                                        id="dropstartMenuButton" data-bs-toggle="dropdown" aria-expanded="true" alt="">
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonSM"
                                        data-popper-placement="bottom-start">
                                        <li>
                                            <a class="dropdown-item" href="./account.php">Personal info
                                                <img src="./images/icon/arrow_right.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./account.php">Account Setting
                                                <img src="./images/icon/arrow_right.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./account.php">Privacy Policy
                                                <img src="./images/icon/arrow_right.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./account.php">Separated link
                                                <img src="./images/icon/arrow_right.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <?php     
                                
                                    if(!isset($_SESSION['access_token'])){  ?>
                                        <ul class="d-flex login-btn">
                                            <li>
                                                <a class="link-light" href="signup.php">Login</a>
                                            </li>
                                            <li>
                                                <a class="link-light" href="signup.php">Signup</a>
                                            </li>
                                        </ul>
                                <?php   } ?>
                                <?php     
                                    if(isset($_SESSION['access_token'])){  ?>
                                        <ul class="d-flex login-btn">
                                            <li>
                                                <a class="link-light " href="Logout.php">Log Out</a>
                                        </li>
                                   
                                        </ul>
                                <?php                                                                                               } ?>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="navbarHeader">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-2 py-4">
                                    <h5 class="text-white">Fashion for men</h5>
                                    <ul class="text-small">
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Suits</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Shirts</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Trousers</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Jackets</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-2 py-4">
                                    <h5 class="text-white">Fashion for women</h5>
                                    <ul class="text-small">
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Suits</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Shirts</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Trousers</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Jackets</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-2 py-4">
                                    <h5 class="text-white">Shoes & Bags</h5>
                                    <ul class="text-small">
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Canvas</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">FlipFlops</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Sneakers</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Lofers</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-2 py-4">
                                    <h5 class="text-white">Accessories</h5>
                                    <ul class="text-small">
                                        <li class="lh-lg"><a class="link-light" href="shop.php">For Men</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">For Women</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Home Accessories</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Outdoor Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-2 py-4">
                                    <h5 class="text-white">Beauty & Health</h5>
                                    <ul class="text-small">
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Cream</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Jwellary</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Makeup</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Hair Treatment</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-2 py-4">
                                    <h5 class="text-white">Category</h5>
                                    <ul class="text-small">
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Suits</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Shirts</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Trousers</a></li>
                                        <li class="lh-lg"><a class="link-light" href="shop.php">Jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="navbarHeaderSearch">
                        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </header>
    </body>
</Html>
