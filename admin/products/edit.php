<?php require_once __DIR__ . '/../partials/header.php' ?>

<?php

// retrive product by product_id from database
if (isset($_GET['id'])) :

    //products data processing
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = '$id'";
    $product_data = $connection->query($sql);

    foreach ($product_data as $row) {
    }

    //products data processing
    $sql = "SELECT * FROM `product_categories`";
    $categories =  $connection->query($sql);

else :
    return header('location: index.php');

endif;

?>

<div class="card" style="">
    <div class="card-header">
        <a href="index.php">
            <button class="btn btn-primary"><i class="bi bi-back"> Back</i></button>
        </a>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" method="post" action="func/update.php" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Product Category</label>
                            <select class="form-control" name="category_id">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['category_id']; ?>" <?php
                                                                                            if ($category['category_id'] == $row['category_id']) echo "selected";
                                                                                            ?>>
                                        <?php echo $category['category_name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Discount Price</label>
                            <input type="text" class="form-control" name="discount_price" value="<?php echo $row['discount_price']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Product Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Feature Image</label>
                            <input type="file" class="form-control" name="feature_image">
                            <img src="<?php echo 'func/' . $row['feature_image']; ?>" height="100px" alt="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Product Gallery</label>
                            <div class="product-gallery" name="gallery"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="6"><?php echo $row['description']; ?></textarea>
                        </div>
                        <input type="hidden" name="product_id" value="<?php echo $id ?>">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-secondary me-1 mb-1" name="submit">Update</button>
                            <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<<<<<<< HEAD



<?php require_once '../partials/js_scripts.php' ?>

=======
>>>>>>> 7313b7c33a315e9ddc3cab945dbea29126a927ce
<script>
    CKEDITOR.replace('description');
</script>


<<<<<<< HEAD
<script>
    const galleryImage = <?php echo $row['gallery']; ?>;

    let preloaded = [];
    let count_images = galleryImage.length;

    for (let index = 0; index < count_images; index++) {
        const element = galleryImage[index];

        let object = {
            id: index,
            src: "func/" + galleryImage[index]
        }

        preloaded.push(object);

=======
<?php require_once '../partials/footer.php' ?>
<script>
    const galleryImage = <?php echo $row['gallery'] ?>;

    let preloaded = [];
    let countImages = galleryImage.length;
    for (let index = 0; index < countImages; index++) {
        const element = galleryImage[index];
        let object = {
            id: index,
            src: 'func/' + galleryImage[index]
        };
        preloaded.push(object);
>>>>>>> 7313b7c33a315e9ddc3cab945dbea29126a927ce
    }


    $('.product-gallery').imageUploader({
        preloaded: preloaded,
<<<<<<< HEAD
        imagesInputName: 'images',
        preloadedInputName: 'old',
        maxSize: 2 * 1024 * 1024,
        maxFiles: 10
    });
</script>


<?php require_once '../partials/footer.php' ?>
=======
        preloadedInputName: 'old'
    });
</script>
>>>>>>> 7313b7c33a315e9ddc3cab945dbea29126a927ce
