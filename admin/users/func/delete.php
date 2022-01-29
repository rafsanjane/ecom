<?php


require_once __DIR__ . '/../../../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FORM user WHERE user_id='$id'";
    $delete = $connection->query($sql);
} else {
    return header('location: ../index.php');
}
