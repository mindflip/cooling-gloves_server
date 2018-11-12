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
$uid = $_POST['UID'];
$height = $_POST['Height'];
$weight = $_POST['Weight'];
$age =$_POST['Age'];
$sex = $_POST['Sex'];

$result = mysqli_query($con,"UPDATE user_info SET height='$height',weight='$weight',age='$age',sex='$sex' where u_id= '$uid'");
if($result){
  echo '회원정보 수정 완료';
}
else{
  echo '실패';
}

mysqli_close($con);
?>