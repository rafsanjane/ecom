<?php 
require_once __DIR__.'/../../../config.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM product_categories WHERE category_id='$id'";
    if($connection->query($sql)==true){
        return header('location: ../index.php');
    }else{
        echo "Opps,Fail to delete the data!";
    }

}else{
    echo "You must have a id ";
}
