<?php
require_once 'db_config.php';

function model_user_login($id, $password)
{
    global $conn;
    $result = mysqli_query($conn, "select * from user where id='$id' and password='$password' ");

    return $result;
}
function model_user_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");

    return $result;
}
function model_user_insert($id, $email, $username, $address, $password)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO user (ID, Email, Name, Address, Password) VALUES ('$id', '$email', '$username','$address','$password')");

    return $result;
}
function model_user_edit($id, $column, $details)
{
    global $conn;
    $result = mysqli_query($conn, "UPDATE user SET $column='$details' WHERE id='$id'");

    return $result;
}

