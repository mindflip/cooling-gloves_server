<?php
// require("config/config.php");
// require("lib/db.php");
// $con = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$con = mysqli_connect("127.0.0.1","root","7101234","glove_s");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = $_POST['username'];
$password = $_POST['password'];

$query_search = "SELECT * from user_info where u_id = '".$username."' AND u_pw = '".$password."'";
$query_exec = mysqli_query($con, $query_search);
  echo "User Found";
$rows = mysqli_fetch_assoc($query_exec);

if($rows == 0) {
  echo "No Such User Found";
}
else  {
}
?>