<?php
require_once 'db_config.php';

function model_ngo_login($id, $password)
{
    global $conn;
    $result = mysqli_query($conn, "select * from ngo where id='$id' and password='$password'");

    return $result;
}

function model_ngo_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM ngo WHERE id = '$id'");

    return $result;
}

function model_ngo_insert($id, $email, $name, $address, $password)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO ngo (ID, Email, Name, Address, Password) VALUES ('$id', '$email', '$name','$address','$password')");

    return $result;
}