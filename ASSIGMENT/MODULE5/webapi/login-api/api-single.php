<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
require("db.php");
$data=json_decode(file_get_contents("php:://"),true);
$id=$data["id"];
$query="SELECT *FROM user WHERE 'id'='".$id."'";

$res=mysqli_num_rows($conn,$query);
$count=mysqli_num_rows($res);
if($count>0){
    $row=mysqli_fetch_array($res);
    echo json_encode($row);
}else{
    echo json_encode(array('message' => 'No user Found.', 'status' => false));

}