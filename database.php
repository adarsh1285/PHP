<?php
// error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="data";
$connection= mysqli_connect($servername,$username,$password,$dbname);
if($connection){
    echo "Connection is success full";
}else{
    echo "connection fail".mysqli_connect_error();
  
}
?>