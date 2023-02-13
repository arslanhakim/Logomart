
<form action="" method="post">

<div class="card">
                                            <img src="images/Upload/<?php echo $Image; ?>" class="card-img img-fluid" name="PImage" alt="...">
                                            <div class="card-img-overlay">
                                                <ul class="">
                                                    <li class="">
                                                        <a href="product-detail.php?id=<?php echo $productId;?>">                                                        
                                                            <img src="./images/icon/zoom.png" alt="">
                                                        </a> </li>
                                                    <li class="">
                                                        <a href="store.php?PID=<?php echo $productId; ?>">
                                                        <img src="./images/icon/cart_black.png" alt="">
                                                        </a>                                                       
                                                    </li>
                                                    <li class="">
                                                        <a href="favourites.php?id=<?php echo $productId; ?>">
                                                            <button name="addfav" style="border:none"><img src="./images/icon/wishlist_black.png" alt=""></button>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $Title?></h5>
                                                <p class="price"><?php echo $Price?></p>
                                                <ul class="rating">
                                                    <li>
                                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_fill.png" class="d-inline-block img-fluid" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="./images/icon/star_empty.png" class="d-inline-block img-fluid" alt="">
                                                    </li>
                                                </ul>
                                            </div>
</div>
</form>