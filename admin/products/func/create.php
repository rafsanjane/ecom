<?php
require_once __DIR__ . '/../../../config.php';


if (isset($_POST['submit'])) {


    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $feature_image = $_FILES['feature_image'];
    $gallery  = $_FILES['images'];

    // freature image
    $temp_location = $feature_image['tmp_name'];
    $image_name = 'img/' . time() . '.webp';
    move_uploaded_file($temp_location, $image_name);


    // gallery images
    $count_gallery = count($gallery['tmp_name']);
    $gallery_image = [];
    for ($i = 0; $i < $count_gallery; $i++) {
<<<<<<< HEAD
        $temp_location = $gallery['tmp_name'];
        $gallery_image[$i] = 'img/' . time() . "_" . uniqid(rand()) . '.webp';
        move_uploaded_file($temp_location[$i], $gallery_image[$i]);
    }

    $gallery_image = json_encode($gallery_image);

    // var_dump($gallery_image);
    // exit;
=======
        $temp_location[$i] = $gallery['tmp_name'];
        $gallery_image[$i] = 'img/' . time() . '.webp';
        move_uploaded_file($temp_location[$i], $gallery_image[$i]);
    }



    $gallery_image = json_encode($gallery_image);

>>>>>>> 7313b7c33a315e9ddc3cab945dbea29126a927ce

    // user id generate
    $user_id = rand(1, 3);

    $sql =    "INSERT INTO products (category_id,user_id,feature_image,gallery,product_name,description,quantity,price,discount_price)
<<<<<<< HEAD
    value ('$category_id','$user_id','$image_name','$gallery_image','$product_name','$description','$quantity','$price','$discount_price')";
=======
                    value ('$category_id','$user_id','$image_name','$gallery_image','$product_name','$description','$quantity','$price','$discount_price')";
>>>>>>> 7313b7c33a315e9ddc3cab945dbea29126a927ce
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
