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

$userid = $_POST['Id'];
$userpw = $_POST['Pw'];
$usernn=$_POST['Nn'];

//아이디 중복 체크
$checkid = "SELECT * FROM user_info WHERE u_id = '$userid'";
$result = mysqli_query($con, $checkid);
$count = mysqli_num_rows($result);

if($count!=0) {
  //중복있음
  echo '사용할 수 없는 아이디입니다.';
}
else{
  //중복없음
  $result = mysqli_query($con,"insert into user_info (u_id,u_pw,nick) values ('$userid','$userpw', '$usernn')");
    if($result){
      echo '회원가입 완료';
    }
    else{
      echo '회원가입 실패';
    }
}

mysqli_close($con);

?>