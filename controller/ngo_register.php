<?php session_start();
require './components/header_login.php';
require './model/ngo.php';
require './model/nphone.php';

$content = '';

if (isset($_POST['register'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['Phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $query = model_ngo_fetch($id);

        if (mysqli_num_rows($query) == false) {
            $register = model_ngo_insert($id, $email, $name, $address, $password);
            $register1 = model_nphone_insert($id, $phone);

            $content .= '<script type="text/javascript">alert("NGO Registered.. go to login page to login")</script>';
        } else {
            $content .= '<script type="text/javascript">alert("This ID Already exists.. Please try another ID!")</script>';
        }

    } else {
        $content .= '<script type="text/javascript">alert("Password and Confirm Password does not match")</script>';
    }
}

require './view/ngo_register.php';
require './components/footer.php';
