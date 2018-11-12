<?php
// require("config/config.php");
// require("lib/db.php");
// $con = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$con = mysqli_connect("127.0.0.1","root","7101234","glove_s");

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
}

$ID = $_POST['u_id'];

$result = mysqli_query($con,"SELECT id, exercise_type, exercise_time FROM exercise_info WHERE u_id = '".$ID."'");

while($rows = mysqli_fetch_array($result)) {
    echo $rows[0];
    echo ' ' . $rows[1];
    echo ' ' . $rows[2];
    echo ' ';
}

mysqli_close($con);
?>