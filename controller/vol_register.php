<?php session_start();
require './components/header_login.php';
require './model/volunteer.php';
require './model/vphone.php';

$content = '';

if (isset($_POST['register'])) {
    $id = $_POST['id'];
    $username = $_POST['name'];
    $phone = $_POST['Phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $uploc = 'public/uploadimage/' . $image;

    if ($password == $cpassword) {
        $query = model_vol_fetch($id);

        if (mysqli_num_rows($query) == false) {
            model_vol_insert($id, $username, $password);
            model_vphone_insert($id, $image, $phone);
            $content .= '<script type="text/javascript">alert("Volunteer Registered.. go to login page to login")</script>';
        } else {
            $content .= '<script type="text/javascript">alert("This ID Already exists.. Please try another ID!")</script>';
        }

    } else {
        $content .= '<script type="text/javascript">alert("Password and Confirm Password does not match")</script>';
    }

}

require './view/vol_register.php';
require './components/footer.php';
