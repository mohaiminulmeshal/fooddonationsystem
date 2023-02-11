<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "food_donation";

$conn = mysqli_connect("localhost", "root", "") or die("Unable to connect");
mysqli_select_db($conn, "food_donation") or die("Cannot connect to database"); //Connect to database