<?php
require_once 'db_config.php';

function model_donation_fetch($id)
{
    global $conn;
    $result = mysqli_query($conn, "select * from donation  where  User_ID like '%$id%' ");

    return $result;
}
function model_donation_fetch_search($search)
{
    global $conn;
    $result = mysqli_query($conn, "select * from donation  where Donation_ID like '%$search%' or User_ID like '%$search%' or Status like '%$search%' or Item like '%$search%'");

    return $result;
}
function model_donation_fetch_on_user($id)
{
    global $conn;
    $result = mysqli_query($conn, 'SELECT * FROM donation');

    return $result;
}
function model_donation_insert($id, $item, $image, $amount, $ngoname, $address)
{
    global $conn;
    $result = mysqli_query($conn, "INSERT INTO donation (User_ID,Item,image,Amount,NGO_Name,Address) VALUES ('$id','$item','$image','$amount','$ngoname','$address')");

    return $result;
}
function model_donation_delete($id)
{
    global $conn;
    $result = mysqli_query($conn, 'DELETE from donation WHERE donation.Donation_ID = ' . $id . ';');

    return $result;
}
function model_donation_edit_item($id, $item)
{
    global $conn;
    $result = mysqli_query($conn, 'UPDATE donation SET Item = "' . $item . '" WHERE Donation_ID = ' . $id . ';');

    return $result;
}
function model_donation_edit_amount($id, $amount)
{
    global $conn;
    $result = mysqli_query($conn, 'UPDATE donation SET Amount = "' . $amount . '" WHERE Donation_ID = ' . $id . ';');

    return $result;
}
function model_donation_edit_status($id, $status)
{
    global $conn;
    $result = mysqli_query($conn, 'UPDATE donation SET Status = "' . $status . '" WHERE donation.Donation_ID = ' . $id);

    return $result;
}

