<?php require_once __DIR__ . '/../partials/header.php' ?>
<?php
if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $sql = "SELECT * FROM `product_categories` WHERE `category_id` = $id";

        $data = $connection->query($sql);
        foreach ($data as $row) {
                $category_name = $row['category_name'];
                $category_slug = $row['category_slug'];
        }
} else {
        return header('location: index.php');
}
?>
<div class="card">
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
                                                <div class="col-md-4">
                                                        <label>Name</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="category_name" placeholder="Ex: Winter Cloth" value="<?php echo $category_name ?>">
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Slug</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="category_slug" placeholder="Ex: winter-cloth" value="<?php echo $category_slug ?>">
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Image</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="file" id="contact-info" class="form-control" name="category_image">
                                                </div>
                                                <input type="hidden" name="category_id" value="<?php echo $id ?>">
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Update</button>
                                                        <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>
</div>


<?php require_once '../partials/js_scripts.php' ?>
<?php require_once '../partials/footer.php' ?>