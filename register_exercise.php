<?php
// require("config/config.php");
// require("lib/db.php");
// $con = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$con = mysqli_connect("127.0.0.1","root","7101234","glove_s");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$uid = $_POST['Id'];
$exType = $_POST['exType'];
$exTime = $_POST['exTime'];

$result = mysqli_query($con,"INSERT INTO exercise_info (u_id, exercise_type, exercise_time) VALUES ('$uid','$exType','$exTime')");

if($result){
  echo '운동정보 등록 완료';
}
else{
  echo '실패';
}

mysqli_close($con);
?>