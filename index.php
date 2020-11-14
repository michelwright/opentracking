<?php

//Connection Settings
$servername = "";
$username = "";
$password = "";
$dbname = "";

//Image Settings
$image = "robo";
$image_type = "png";

function getUserIpAddr(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

//suggestion --> create log_tbl to log success/errors

function logAccess(){
    $ip_addr = getUserIpAddr();

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      //error {log}
    }
    $sql = "INSERT INTO `access_info` (`ip_address`) VALUES ('$ip_addr')";   
    if ($conn->query($sql) === TRUE) {
      //success {log}
    } else {
      //error {log}
    }
}

function returnImg(){
  $im = file_get_contents('./' $image '.' $image_type);
  header('content-type: image/' $image_type);
  echo $im;
}

returnImg();
logAccess();


?>