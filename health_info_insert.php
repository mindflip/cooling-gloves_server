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

$classification = $_POST['classification'];

if ($classification == "1"){
	$uid = $_POST['UID'];
	$heartrate = $_POST['HeartRate'];
	$bodytemp = $_POST['BodyTemp'];
	$peltiertemp = $_POST['PeltierTemp'];

	$result = mysqli_query($con,"INSERT INTO health_info VALUES('$uid',curdate(),curtime(),'$heartrate','$bodytemp', '$peltiertemp')");
} else if ($classification == "2"){
	$uid = $_POST['UID'];
	$targettemp = $_POST['TargetTemp'];

	$result = mysqli_query($con, "UPDATE user_info SET target_temp='$targettemp' WHERE u_id='$uid'");
}

if($result){
  echo '성공';
}
else{
  echo '실패';
}

mysqli_close($con);
?>