<?php 
require_once __DIR__.'/../../../config.php';


    if(isset($_POST['submit'])){
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $quantity = $_FILES['quantity'];
        $price = $_FILES['price'];
        $discount_price = $_FILES['discount_price'];

        $feature_image 
        
        $temp_location =  $image['tmp_name'];
        $image_name = 'img/'.time().'.webp';
        move_uploaded_file($temp_location,$image_name);


        $sql = "INSERT INTO products (product_name, description, quantity, price, discount_price)
        VALUES ('$name', '$slug', '$image_name')";
        $result = $connection->query($sql);

        if($result){
            echo "Product inserted successfully";
            header('location:../index.php');
        }else{
            echo "Query : $query <br><br> Error : $connection->error";
        }

    }else{
        header('location:../create.php');
    }