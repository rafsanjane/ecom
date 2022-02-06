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

    $name = input_data_validation($_POST['name']);
    $email = input_data_validation($_POST['email']);
    $phone = input_data_validation($_POST['phone']);
    $password = input_data_validation($_POST['password']);
    $role = input_data_validation($_POST['role']);

    $exist_sql = "SELECT * FROM users WHERE (name = '$name' OR email = '$email')";
    $exist_result = $connection->query($exist_sql);

    if ($exist_result->num_rows > 0) {
        $email_exist = "Email already exists";
        $username_exist = "username already exists";
    } else {
        $sql =    "INSERT INTO users (name,email,phone,password,role) value ('$name','$email','$phone','$password','$role')";
        $result = $connection->query($sql);

        if ($result) {
            echo "New User added Successfully";
            header('location: ../index.php');
        } else {
            echo "Query:  $sql  <br><br> Error: $connection->error ";
        }
    }
} else {
    return header('location: ../create.php');
}
