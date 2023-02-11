<?php
require_once 'db_config.php';

function model_nphone_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM nphone WHERE id = '$id'");

    return $result;
}
function model_nphone_insert($id, $phone)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO nphone (id, Phone) VALUES ('$id', '$phone')");

    return $result;
}

