<?php 
require_once __DIR__.'/../../../config.php';


    if(isset($_POST['submit'])){
        $name = $_POST['category_name'];
        $slug = $_POST['category_slug'];
        $image = $_FILES['category_image'];
        
        $temp_location =  $image['tmp_name'];
        $image_name = 'img/'.time().'.webp';
        move_uploaded_file($temp_location,$image_name);


        $sql = "INSERT INTO product_categories (category_name, category_slug, category_image)
        VALUES ('$name', '$slug', '$image_name')";
        $result = $connection->query($sql);

        if($result){
            echo "Category inserted successfully";
            header('location:../index.php');
        }else{
            echo "Query : $query <br><br> Error : $connection->error";
        }

    }else{
        header('location:../create.php');
    }