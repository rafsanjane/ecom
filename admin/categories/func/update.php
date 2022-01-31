<?php
require_once __DIR__.'/../../../config.php';


if(isset($_POST['submit'])){
    $name = $_POST['category_name'];
    $slug = $_POST['category_slug'];
    $id = $_POST['category_id'];

    $sql = "UPDATE product_categories  SET category_name='$name', category_slug ='$slug' WHERE category_id = '$id'";
    $result = $connection->query($sql);

    if($result){
        echo "Category inserted successfully";
            header('location:../index.php');
    }else{
        echo "Query: $sql <br><br> Error: $connection->error";
    }
    
}else{
    header('location:../create.php');
}