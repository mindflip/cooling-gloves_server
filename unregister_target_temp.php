<?php
// require("config/config.php");
// require("lib/db.php");
// $con = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$con = mysqli_connect("127.0.0.1","root","7101234","glove_s");

if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL : " . mysqli_connect_error();
}

$ID = $_POST['UID'];

$result = mysqli_query($con,"UPDATE user_info SET target_temp = NULL WHERE u_id = '$ID'");

var_dump($result);

if ($result != NULL){
	echo "Success to delete target_temp value from user_info table.";
}
mysqli_close($con);
?>