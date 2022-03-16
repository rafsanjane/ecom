
<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>


<?php


if (isset($_REQUEST['category'])) :
    $category_slug = $_REQUEST['category'];

    // retrive category id from databse
    
    $category_id_sql = "SELECT category_id FROM product_categories WHERE category_slug ='$category_slug'";

    $category = $connection->query($category_id_sql);

    foreach($category as $cat){
    }

    $category_id =  $cat['category_id'];
     // retrive category id from databse
     $sql = "SELECT * FROM products WHERE category_id='$category_id'";

     $products = $connection->query($sql);

     foreach($products as $product){
    }

    var_dump($cat);
    echo "</br>";
    print_r($cat);

    $productss = count($cat);
    echo $productss;
    exit;
?>

<main>


<!-- Header End -->
</header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo ucwords(str_replace('-',' ',$_REQUEST['category'])); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">  
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php 
                            
                            foreach ($products as $product) {            
                                
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="admin/products/func/<?php echo $product['feature_image'];?>" height="366px"   alt="">
                                    </div>
                                    <div class="img-cap">
                                            <span>Add to cart</span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    <div class="popular-caption">
                                        <h3><a href="product.php?id=<?php echo $product['product_id'] ;?>"><?php echo substr($product['product_name'], 0, 60)."....";?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <?php 
                              }
                              ?>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->


</main>



<?php 

else :
    echo "<div style='text-align:center;' ><img  src='frontend/assets/img/no-product-found.png' alt='no-product-found' srcset=''></div>";

endif ?>





<?php require_once 'frontend/partials/footer.php';?>