<?php session_start();

require './model/complain.php';


$content = '';

$details = $_POST['value'];

mysqli_error($conn);

$id = $_SESSION['id'];
$column = $_POST['drop'];

$content = model_complain_fetch($id);
