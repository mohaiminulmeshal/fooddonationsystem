<?php session_start();	require './components/header_login.php';
require './model/user.php';


$content = '';

if (isset($_POST['login'])) {
	$id=$_POST['id'];
	$password=$_POST['password'];
    $result = model_user_login($id, $password);

    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $_SESSION['id'] = $id;
        $_SESSION['password'] = $password;

        $content .= "<script>window.location.href = 'donor_dash';</script>";
    } else {
        $content .= '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
    }
}
require './view/donor_login.php';

require './components/footer.php';
