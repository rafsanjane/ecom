<?php
require_once __DIR__ . '/../../../config.php';


if (isset($_POST['submit'])) {

    $percent = $_POST['percent'];
    $ammount = $_POST['ammount'];
    $coupon_code = $_POST['coupon_code'];
    $type = $_POST['type'];

    $id = $_GET['id'];



    $sql = "UPDATE coupons SET coupon_code='$coupon_code',
     percent ='$percent', ammount ='$ammount', select_type ='$type' WHERE coupon_id = '$id'";
    $result = $connection->query($sql);

    if ($result) {
        echo "Category inserted successfully";
        header('location:../index.php');
    } else {
        echo "Query: $sql <br><br> Error: $connection->error";
    }
} else {
    header('location:../create.php');
}
