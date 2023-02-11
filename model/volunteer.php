<?php
require_once 'db_config.php';

function model_vol_login($id, $password)
{
    global $conn;
    $result = mysqli_query($conn, "select * from volunteer where id='$id' and password='$password'");

    return $result;
}
function model_vol_fetch_all()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM volunteer ;");

    return $result;
}
function model_vol_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM volunteer WHERE id = '$id'");

    return $result;
}
function model_vol_insert($id, $username, $password)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO volunteer (ID, Name, Password) VALUES ('$id', '$username','$password')");

    return $result;
}
function model_vol_edit_status($id, $status)
{
    global $conn;
    $result = mysqli_query($conn, 'UPDATE volunteer SET status = "' . $status . '" WHERE volunteer.id = "' . $id . '"');

    return $result;
}

