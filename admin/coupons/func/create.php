<?php

require_once __DIR__ . '/../../../config.php';




if (isset($_POST['submit'])) {
    function input_data_validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $percent = input_data_validation($_POST['percent']);
    $ammount = input_data_validation($_POST['ammount']);
    $coupon_code = input_data_validation($_POST['coupon_code']);
    $type = input_data_validation($_POST['type']);


  
    $sql =    "INSERT INTO coupons (percent,ammount,coupon_code,select_type) value ('$percent','$ammount','$coupon_code','$type')";
    $result = $connection->query($sql);


    if($result){
        echo "Category inserted successfully";
        header('location:../index.php');
    }else{
        header('location:../create.php');
    }
}