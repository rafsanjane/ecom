<?php
require_once __DIR__ . '/../../../config.php';


if (isset($_POST['update'])) {

    $product_id = $_REQUEST['id'];

    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];


    $feature_image = $_FILES['feature_image'];


    // freature image
    $temp_location = $feature_image['tmp_name'];
    $image_name = 'img/' . time() . '.webp';
    move_uploaded_file($temp_location, $image_name);


    // // gallery images
    // $gallery  = $_FILES['images'];
    // $count_gallery = count($gallery['tmp_name']);
    // $gallery_image = [];
    // for ($i=0; $i < $count_gallery; $i++) {
    //     $temp_location = $gallery['tmp_name'][$i];
    //     $gallery_image[$i] = 'img/'.time().'.webp';
    //     move_uploaded_file($temp_location,$gallery_image[$i]);
    // }

    // $gallery_image = json_encode($gallery_image);


    // user id generate
    $user_id = rand(1, 3);

    $sql =    "UPDATE  products set category_id = '$category_id',user_id='$user_id',feature_image='$image_name',product_name='$product_name',
    description='$description',quantity='$quantity',price='$price', discount_price='$discount_price' 
    WHERE product_id='$product_id'";
    $result = $connection->query($sql);

    if ($result) {
        echo "New User added Successfully";
        header('location: ../index.php');
    } else {
        echo "Query:  $sql  <br><br> Error: $connection->error ";
    }
} else {
    header('location: /../create.php');
}
