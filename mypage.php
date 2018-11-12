<?php
// require("config/config.php");
// require("lib/db.php");
// $con = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$con = mysqli_connect("127.0.0.1","root","7101234","glove_s");

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
}

$ID = $_POST['u_id'];

$result = mysqli_query($con,"SELECT * FROM user_info WHERE u_id = '".$ID."'");

$rows = mysqli_fetch_array($result);
$data = $rows[2];

if($data) {
  for ($count=2; $count<=count($rows); $count++) {
      echo $rows[$count] . ' ';
  }

} else {
  echo 'fail';
}
mysqli_close($con);
?>