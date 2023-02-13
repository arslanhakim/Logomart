<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <title>Product Detail Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./scss/main.css">
</head>

<body>
    <div class="wrapper">

        <!-- header -->
        <?php include('./header.php');?>

        <!-- main -->
        <main id="main">

            <!-- account section -->
            <section id="account">
                <div class="container">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="my-account-tab" data-bs-toggle="pill"
                                data-bs-target="#my-account" type="button" role="tab" aria-controls="my-account"
                                aria-selected="true">My Order 
                                <img src="./images/icon/arrow_right.png" class="img-fluid" alt="">
                            </button>
                            <button class="nav-link" id="manage-address-tab" data-bs-toggle="pill"
                                data-bs-target="#manage-address" type="button" role="tab"
                                aria-controls="manage-address" aria-selected="false">Manage Address 
                                <img src="./images/icon/arrow_right.png" class="img-fluid" alt="">
                            </button>
                            <button class="nav-link" id="payment-method-tab" data-bs-toggle="pill"
                                data-bs-target="#payment-method" type="button" role="tab"
                                aria-controls="payment-method" aria-selected="false">Payment Methods 
                                <img src="./images/icon/arrow_right.png" class="img-fluid" alt="">
                            </button>
                            <button class="nav-link" id="order-tracking-tab" data-bs-toggle="pill"
                                data-bs-target="#order-tracking" type="button" role="tab"
                                aria-controls="order-tracking" aria-selected="false">Order Tracking 
                                <img src="./images/icon/arrow_right.png" class="img-fluid" alt="">
                            </button>
                            <button class="nav-link" id="account--settings-tab" data-bs-toggle="pill"
                                data-bs-target="#account-settings" type="button" role="tab"
                                aria-controls="account-settings" aria-selected="false">Account Settings 
                                <img src="./images/icon/arrow_right.png" class="img-fluid" alt="">
                            </button>
                            <button class="nav-link" id="privacy-policy-tab" data-bs-toggle="pill"
                                data-bs-target="#privacy-policy" type="button" role="tab"
                                    aria-controls="privacy-policy" aria-selected="false">Privacy Policy 
                                <img src="./images/icon/arrow_right.png" class="img-fluid" alt="">
                            </button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="my-account" role="tabpanel"
                                aria-labelledby="my-account-tab">
                                <div class="nav-btn-container">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="in-process-tab" data-bs-toggle="pill"
                                                data-bs-target="#in-process" type="button" role="tab"
                                                aria-controls="in-process" aria-selected="true">In Process</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="completed-tab" data-bs-toggle="pill"
                                                data-bs-target="#completed" type="button" role="tab"
                                                aria-controls="completed" aria-selected="false">Completed</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="in-process" role="tabpanel"
                                        aria-labelledby="in-process-tab">
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img class="img-fluid" src="./images/product/product_03.png" alt="...">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body row">
                                                    <div class="left-side-content-box col-sm-6">
                                                        <p class="order-id">
                                                            <strong>Order ID: </strong>a68sw1fd68q
                                                        </p>
                                                        <p class="order-on">
                                                            <strong>Order On: </strong>20 Feb, 2021
                                                        </p>
                                                        <p class="card-text">
                                                            <strong>Receive By: </strong>24 Feb, 2021
                                                        </p>
                                                    </div>
                                                    <div class="right-side-content-box col-sm-6 text-end">
                                                        <p class="product-price">$250.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img class="img-fluid" src="./images/product/product_03.png" alt="...">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body row">
                                                    <div class="left-side-content-box col-sm-6">
                                                        <p class="order-id">
                                                            <strong>Order ID: </strong>a68sw1fd68q
                                                        </p>
                                                        <p class="order-on">
                                                            <strong>Order On: </strong>20 Feb, 2021
                                                        </p>
                                                        <p class="card-text">
                                                            <strong>Receive By: </strong>24 Feb, 2021
                                                        </p>
                                                    </div>
                                                    <div class="right-side-content-box col-sm-6 text-end">
                                                        <p class="product-price">$250.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img class="img-fluid" src="./images/product/product_03.png" alt="...">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body row">
                                                    <div class="left-side-content-box col-sm-6">
                                                        <p class="order-id">
                                                            <strong>Order ID: </strong>a68sw1fd68q
                                                        </p>
                                                        <p class="order-on">
                                                            <strong>Order On: </strong>20 Feb, 2021
                                                        </p>
                                                        <p class="card-text">
                                                            <strong>Receive By: </strong>24 Feb, 2021
                                                        </p>
                                                    </div>
                                                    <div class="right-side-content-box col-sm-6 text-end">
                                                        <p class="product-price">$250.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="completed" role="tabpanel"
                                        aria-labelledby="completed-tab">
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img class="img-fluid" src="./images/product/product_05.png" alt="...">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body row">
                                                    <div class="left-side-content-box col-sm-6">
                                                        <p class="order-id">
                                                            <strong>Order ID: </strong>a68sw1fd68q
                                                        </p>
                                                        <p class="order-on">
                                                            <strong>Order On: </strong>20 Feb, 2021
                                                        </p>
                                                        <p class="card-text">
                                                            <strong>Receive By: </strong>24 Feb, 2021
                                                        </p>
                                                    </div>
                                                    <div class="right-side-content-box col-sm-6 text-end">
                                                        <p class="product-price">$250.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="manage-address" role="tabpanel"
                                aria-labelledby="manage-address-tab">
                                <button class="btn explore-more-btn">Add a new address</button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="name">
                                            <strong>Nicolas Jones</strong>
                                        </p>
                                        <p class="address-id">
                                            <strong>Address ID:</strong> 6a68as1
                                        </p>
                                        <p class="address">
                                            <strong>Adress:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn">
                                            <img src="./images/icon/edit.png" class="img-fluid" alt=""> Edit
                                        </button>
                                        <button class="btn">
                                            <img src="./images/icon/delete.png" class="img-fluid" alt=""> Delete
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="name">
                                            <strong>Nicolas Jones</strong>
                                        </p>
                                        <p class="address-id">
                                            <strong>Address ID:</strong> 6a68as1
                                        </p>
                                        <p class="address">
                                            <strong>Adress:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn">
                                            <img src="./images/icon/edit.png" class="img-fluid" alt=""> Edit
                                        </button>
                                        <button class="btn">
                                            <img src="./images/icon/delete.png" class="img-fluid" alt=""> Delete
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="name">
                                            <strong>Nicolas Jones</strong>
                                        </p>
                                        <p class="address-id">
                                            <strong>Address ID:</strong> 6a68as1
                                        </p>
                                        <p class="address">
                                            <strong>Adress:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn">
                                            <img src="./images/icon/edit.png" class="img-fluid" alt=""> Edit
                                        </button>
                                        <button class="btn">
                                            <img src="./images/icon/delete.png" class="img-fluid" alt=""> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-method" role="tabpanel"
                                aria-labelledby="payment-method-tab">
                                <button class="btn explore-more-btn">Edit</button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="name">
                                            <strong>Nicolas Jones</strong>
                                        </p>
                                        <p class="card-type">
                                            <strong>Card Type:</strong> VISA
                                        </p>
                                        <p class="card-number">
                                            <strong>Card Number:</strong> 1233-0000-0000-0000-0000     
                                            <strong class="card-exp-date">Exp Date:</strong> 12/24
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn">
                                            <img src="./images/icon/edit.png" class="img-fluid" alt=""> Edit
                                        </button>
                                        <button class="btn">
                                            <img src="./images/icon/delete.png" class="img-fluid" alt=""> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="order-tracking" role="tabpanel"
                                aria-labelledby="order-tracking-tab">
                                <div class="nav-btn-container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item disabled">Order ID</li>
                                        <li class="breadcrumb-item" aria-current="page">a68sw1fd68q</li>
                                    </ol>
                                    <div class="shipping-status">
                                        <h4 class="title">Order Status</h4>
                                        <p class="status">Shipping</p>
                                    </div>
                                </div>
                                <img src="./images/client/client-5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="account-settings" role="tabpanel"
                                aria-labelledby="account-settings-tab">
                                <button class="btn explore-more-btn">Edit</button>
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="./images/client/client-1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputGender" placeholder="Gender">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Contact</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="inputContact" placeholder="Contact">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="privacy-policy" role="tabpanel"
                                aria-labelledby="privacy-policy-tab">
                                <h3 class="title">Privacy Policy</h3>
                                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium, praesentium quaerat atque fugit culpa necessitatibus officia, nisi minima maiores accusantium ducimus voluptas! Impedit provident dignissimos, reiciendis voluptatem deserunt voluptas?
                                Dignissimos fugit vero a dolor. Omnis perspiciatis vitae, placeat repellendus culpa odit sapiente quibusdam aliquam cum vel ea earum eius ipsam blanditiis veniam error quas aliquid iste maiores voluptatem molestiae!
                                Iusto porro modi laborum ipsam doloribus cumque est suscipit assumenda nesciunt labore velit debitis et deserunt ducimus distinctio hic, earum maiores ratione cum vero quas veniam sunt delectus. Recusandae, debitis?</p>
                                <h3 class="title">Cancellation Policy</h3>
                                <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe accusamus corrupti numquam? Nemo corrupti suscipit, sapiente voluptas numquam reprehenderit vitae natus odio quibusdam in, eveniet autem ab vel, minus magni.
                                Autem illo porro quam ex expedita libero, nihil nisi maiores voluptates, fuga aperiam! Deserunt, itaque provident fugit autem animi ipsum commodi optio eius a, architecto dignissimos, recusandae minus suscipit nemo!
                                Illo incidunt nulla ea omnis alias. Libero quisquam sunt vero consequatur nulla odio reiciendis aliquam, at nemo. Aperiam aliquam, perferendis, voluptate ad, deserunt consequatur quasi ducimus voluptatum minima provident dicta?
                                A iste doloribus exercitationem hic distinctio non sapiente quia iusto? Eos id perferendis maiores maxime! Autem excepturi qui voluptatum tempora fugit at nulla maxime tenetur, nesciunt sint reprehenderit nostrum id.
                                Laborum dolor aliquam quos, aspernatur tenetur eos fugiat dicta eius quod minus labore vel. Cum sit nostrum asperiores illum repellat dolorum, facere atque nam rem! Reiciendis quasi at dolorem ut.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- email-subscription section -->
            <section id="email-subscription">
                <div class="row">
                    <div class="col-md-6"
                        style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./images/background/bg-4.jpg);">
                        <div class="email-field-container">
                            <div class="email-field-title">Get out special discount</div>
                            <div class="email-field-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            <div class="email-field-box">
                                <input type="email" placeholder="Email address ...">
                                <button class="btn explore-more-btn">Get Coupon Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"
                        style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./images/background/bg-5.jpg);">
                        <!-- <img src="./images/background/1-2.jpg" alt=""> -->
                    </div>
                </div>
            </section>
        </main>

        <!-- footer -->
        <?php include('./footer.php');?>
    </div>

    <script src="./lib/jquery/jquery-3.5.1.min.js"></script>

    <script src="./lib/popper/popper.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="./lib/mixitup/mixitup.min.js"></script>

    <script src="./lib/masonry/masonry.pkgd.min.js"></script>

    <script src="./lib/owlcarousel/js/owl.carousel.min.js"></script>

    <script src="./lib/quickview/js/jquery_image_quickview.js"></script>

    <script src="./lib/zoom/jquery.zoom.min.js"></script>

    <script src="./js/main.js"></script>
</body>

</html>