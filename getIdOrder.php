<?php
session_start();


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../auth/login.php");
    exit;
}

require_once "./config.php";

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["order_id"];

$sql = "SELECT * FROM checkdoubleid WHERE order_id = '$id'";
$result = $mysqli->query($sql);

// var_dump($result);

$row = $result->fetch_array();

// foreach($row as $item) {
	// echo $item;
// }

// echo $result->length;
// echo "test";

// var_dump($row);

if($result->num_rows >= 1) {
	echo "scanned!!";
}else {
	echo "failed";
}


// echo $result->num_rows;

$mysqli->close();


?>