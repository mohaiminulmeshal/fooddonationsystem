<?php session_start();
require './components/header_ngo.php';
require './model/nphone.php';
require './model/ngo.php';

$content = '';

$id = $_SESSION['id'];

$query = model_ngo_fetch($id);
$query2 = model_nphone_fetch($id);

$row = mysqli_fetch_assoc($query);
$row2 = mysqli_fetch_assoc($query2);

$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
$phone = $row2['Phone'];

require './view/ngo_profile.php';
require './components/footer.php';
