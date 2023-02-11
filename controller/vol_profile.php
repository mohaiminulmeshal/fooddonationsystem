<?php session_start();
require './components/header_volunteer.php';
require './model/volunteer.php';
require './model/vphone.php';

$content = '';

$id = $_SESSION['id'];
$query = model_vol_fetch($id);
$query2 = model_vphone_fetch($id);
$row = mysqli_fetch_assoc($query);
$row2 = mysqli_fetch_assoc($query2);
$name = $row['name'];
$image = $row2['image'];
$phone = $row2['phone'];

require './view/vol_profile.php';

require './components/footer.php';
