<?php
// require("config/config.php");
// require("lib/db.php");
// $con = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$con = mysqli_connect("127.0.0.1","root","7101234","glove_s");

if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL : " . mysqli_connect_error();
}

$u_id = $_POST['u_id'];

$result = mysqli_query($con,"DELETE FROM user_info WHERE u_id = '$u_id'");

var_dump($result);

if ($result != NULL){
	echo "Success to delete user column from user_info table.";
}
mysqli_close($con);
?>