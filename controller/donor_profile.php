<?php session_start();
require './components/header.php';
require './model/user.php';
require './model/phone.php';

$content = '';

$id = $_SESSION['id'];
$query = model_user_fetch($id);
$query2 = model_phone_fetch($id);

$row = mysqli_fetch_assoc($query);
$row2 = mysqli_fetch_assoc($query2);

$image = $row2['image'];
$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
$phone = $row2['Phone'];

require './view/donor_profile.php';
require './components/footer.php';