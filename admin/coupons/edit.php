<?php require_once __DIR__ . '/../partials/header.php' ?>
<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM coupons WHERE coupon_id='$id'";
    $data = $connection->query($sql);

    foreach ($data as $row) {
        
        
    }
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
                        <form class="form form-horizontal" method="post" action="func/create.php" enctype="multipart/form-data">
                                <div class="form-body">
                                        <div class="row">
                                                <div class="col-md-4">
                                                        <label>Coupon code</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control" name="coupon_code" value="<?php echo $row['coupon_code'] ?>">
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Percent %</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="percent" value="<?php echo $row['percent'] ?>">
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Amount TK</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="ammount" value="<?php echo $row['ammount'] ?>">
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Coupon Type</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select name="type" id="" class="form-control" required>
                                                        <option value="Percent" <?php echo $row['select_type']=='Percent'? "selected" : "" ?>>Percent</option>
                                                        <option value="Ammount" <?php echo $row['select_type']=='Ammount'? "selected" : "" ?> >Ammount</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Save</button>
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