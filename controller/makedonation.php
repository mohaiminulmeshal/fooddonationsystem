<?php session_start();
require './components/header.php';
require './model/donation.php';


$content = '';

if (isset($_POST['submit'])) {
    $id = $_POST['User_ID'];
    $item = $_POST['Item'];
    $amount = $_POST['Amount'];
    $ngoname = $_POST['NGO_Name'];
    $address = $_POST['Address'];

    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $uploc = 'public/uploadimage/' . $image;

    if ($_SESSION['id'] == $id) {
        model_donation_insert($id, $item, $image, $amount, $ngoname, $address);
        move_uploaded_file($tmpName, $uploc);


        $content .= '<script type="text/javascript">alert("Donation Confirmed!")</script>';
    } else {
        $content .= '<script type="text/javascript">alert("Donation Failed!")</script>';
    }
}

require './view/makedonation.php';
require './components/footer.php';
