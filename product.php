<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>
<?php

if (isset($_REQUEST['id'])) :
    $product_id = $_REQUEST['id'];

    // query for product
    $sql = "SELECT * FROM products WHERE product_id='$product_id'";

    $data = $connection->query($sql);
    foreach ($data as $product) {
    }


?>
    <main>

        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="product_img_slide owl-carousel">
                            <!-- product gallery image processing -->
                            <?php

                            $product_gallery = json_decode($product['gallery']);

                            $product_gallery_count = count($product_gallery);

                            for ($i = 0; $i < $product_gallery_count; $i++) :
                            ?>
                                <div class="single_product_img">
                                    <img src="admin/products/func/<?php echo $product_gallery[$i]; ?>" alt="#" class="img-fluid">
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="single_product_text text-center">
                            <h3><?php echo $product['product_name']; ?></h3>
                            <p>
                                <?php echo $product['description'] ?>
                            </p>
                            <div class="card_area">
                                <div class="product_count_area">
                                    <p>Quantity</p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <p>$5</p>
                                </div>

                                <!-- add to cart -->
                                <div class="add_to_cart">
                                    <a href="cart_process.php?product_id=<?php echo $product['product_id'] ?>" class="btn_3">
                                        <span>Add to cart</span>
                                    </a>
                                </div>

                                <!-- /add to cart -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--================End Single Product Area =================-->



    </main>
<?php
else :
    echo "<p class='p-4 text-center'>There is no product</p>";

endif ?>
<?php require_once 'frontend/partials/footer.php'; ?>