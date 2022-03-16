<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>
<?php



    // query from product
    $sql = "SELECT * FROM product_categories";

    $categories = $connection->query($sql);
    

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
                                <h2>All Categories of Giant-Mart</h2>
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
                            
                            foreach ($categories as $category) {            
                                
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="admin/categories/func/<?php echo $category['category_image'];?>" height="366px"   alt="">
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="category.php?category=<?php echo $category['category_slug'] ;?>"><?php echo $category['category_name'];?></a></h3>
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



<?php require_once 'frontend/partials/footer.php';?>