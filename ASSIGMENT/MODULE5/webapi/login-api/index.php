<?php
require_once "db.php";

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
$sel="select * FROM user";
$res=mysqli_query($conn,$sel) or die('select query failed');
$count=mysqli_num_rows($res);
if($count>0){
    $output=mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array("message"=>"no user register.","status"=>false));
}
?>