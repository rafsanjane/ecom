<?php

require_once __DIR__ . '/../../../config.php';


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql =    "INSERT INTO users (name,email,phone,password,role) value ('$name','$email','$phone','$password','$role')";
} else {
    return header('location: ../create.php');
}
