<?php
require_once __DIR__ . '/../../../config.php';


if (isset($_POST['submit'])) {

    $product_id = $_GET['id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    // temporaray user id generate
    $user_id = rand(1, 3);

    // existing feature image

    $sql = "SELECT feature_image FROM products WHERE product_id = '$product_id'";
    $data = $connection->query($sql);

    foreach ($data  as $value) {
        $existing_feature_image = $value['feature_image'];
    }

    // if (isset($_FILES['feature_image'])) {

    //     // freature image upload
    //     $temp_location = $feature_image['tmp_name'];
    //     $image_name = 'img/' . time() . '.webp';
    //     $uploaded = move_uploaded_file($temp_location, $image_name);
    //     // deleting existing feature image
    //     unlink($existing_feature_image);
    // } else {
    //     $_FILES['feature_image'] = $existing_feature_image;
    // }

    // gallery images

    $sql = "SELECT gallery FROM products WHERE product_id = '$product_id'";
    $data = $connection->query($sql);

    foreach ($data  as $value) {
        $existing_gallery = json_decode($value['gallery']);
    }

    $old_gallery_count = count($existing_gallery);


    if (isset($_REQUEST['old']) || isset($_FILES['images'])) {

        for ($i = 0; $i < $old_gallery_count; $i++) {

            if (!in_array($i, ($_REQUEST['old']))) {

                unlink($existing_gallery[$i]); // delete image from directory
                unset($existing_gallery[$i]); // remove array item from gallery image

            }
        }

        if (isset($_FILES['images'])) {
            $gallery = $_FILES['images'];
            // gallery image 
            $count_gallery = count($gallery['tmp_name']);
            $gallery_image = [];
            for ($i = 0; $i < $count_gallery; $i++) {
                $temp_location[$i] =  $gallery['tmp_name'][$i];
                $gallery_image[$i] = 'img/' . time() . '.webp';
                move_uploaded_file($temp_location[$i], $gallery_image[$i]);

                array_push($existing_gallery, $gallery_image[$i]); // push new image on exiisting images array
            }
            $gallery_image = json_encode($existing_gallery);
        }
    }








    // Update query

    $sql = "UPDATE products  SET product_name ='$product_name', category_id = '$category_id', user_id = '$user_id', price ='$price', discount_price = '$discount_price', quantity = '$quantity', description = '$description', feature_image = '$image_name', gallery='$gallery_image'  WHERE product_id = '$product_id'";


    $result = $connection->query($sql);


    if ($result) {
        echo "Product Updated Successfully";
        header('location: ../index.php');
    } else {
        echo "Query:  $sql  <br><br> Error: $connection->error";
    }
} else {
    header('location:../edit.php');
}
