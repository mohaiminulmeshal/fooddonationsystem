<?php session_start();	require './components/header_login.php';
require './model/ngo.php';

$content = '';

if (isset($_POST['login'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $query = model_ngo_login($id, $password);

    if (mysqli_num_rows($query)) {
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);

        $_SESSION['id'] = $id;
        $_SESSION['password'] = $password;

        header("Location: /ngo_dash");
    } else {
        $content .= '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
    }
}

require './view/ngo_login.php';
require './components/footer.php';