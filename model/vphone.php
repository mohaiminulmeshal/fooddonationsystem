<?php
require_once 'db_config.php';

function model_vphone_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM vphone WHERE id = '$id'");

    return $result;
}
function model_vphone_insert($id, $image, $phone)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO vphone (id,image, Phone) VALUES ('$id','$image','$phone')");

    return $result;
}

