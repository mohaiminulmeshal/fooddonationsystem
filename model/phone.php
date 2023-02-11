<?php
require_once 'db_config.php';

function model_phone_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM phone WHERE id = '$id'");

    return $result;
}
function model_phone_insert($id, $phone, $image)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO phone (id, Phone, image) VALUES ('$id', '$phone','$image')");

    return $result;
}

