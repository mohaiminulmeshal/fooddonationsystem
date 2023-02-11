<?php session_start();	require './components/header_login.php';
require './model/user.php';
require './model/phone.php';

$content = '';

if (isset($_POST['register'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $phone = $_POST['Phone'];
    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $uploc = 'public/uploadimage/' . $image;

    if ($password == $cpassword) {
        $q = "select * from user where id= '$id'";
        $query = mysqli_query($conn, $q);

        if (mysqli_num_rows($query) == false) {
            $register = model_user_insert($id, $email, $username, $address, $password);
            $register1 = model_phone_insert($id, $phone, $image);

            move_uploaded_file($tmpName, $uploc);
            $content .= '<script type="text/javascript">alert("Donor Registered.. go to login page to login")</script>';
        } else {
            $content .= '<script type="text/javascript">alert("This ID Already exists.. Please try another ID!")</script>';
        }

    } else {
        $content .= '<script type="text/javascript">alert("Password and Confirm Password does not match")</script>';
    }
}

require './view/register.php';
require './components/footer.php';
