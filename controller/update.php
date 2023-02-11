<?php session_start();

require './model/user.php';

$content = '';

$details = $_POST['value'];
$id = $_SESSION['id'];
$column = $_POST['drop'];

model_user_edit($id, $column, $details);

$content .= '<script>window.location.assign("donor_profile");</script>';

require './view/updateprofile.php';
require './components/footer.php';
