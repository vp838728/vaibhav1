<?php
$conn=new mysqli('localhost','root','','rest_api');
if(!$conn){
 die("connection fail:".mysqli_connect_error());
}
?>