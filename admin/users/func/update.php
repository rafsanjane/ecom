<?php
require_once __DIR__ . '/../../../config.php';


if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id = $_POST['user_id'];

    $sql = "UPDATE users  SET name='$name', email ='$email', phone = '$phone', password = '$password', role = '$role' WHERE user_id = '$id'";
    $result = $connection->query($sql);

    if ($result) {
        echo "Category inserted successfully";
        header('location:../index.php');
    } else {
        echo "Query: $sql <br><br> Error: $connection->error";
    }
} else {
    header('location:../update.php');
}
