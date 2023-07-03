<?php
include('db.php');

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// $data_arr=json_decode(file_get_contents("php:://input"),true);
$data_arr = json_decode(file_get_contents("php://input"), true);


$name=$data_arr["name"];
$unm=$data_arr["unm"];
$email=$data_arr["email"];
$phone=$data_arr["phone"];
$pass=md5($data_arr["pass"]);
$address=$data_arr["address"];

$sel="select 'unm' from user where unm='".$unm."'";
$res=mysqli_query($conn,$sel);
$count=mysqli_num_rows($res);
if($count>0){
    echo json_encode(array("measge"=>"usename is aleredy exits","status"=>false));
}else{
    $sel="INSERT INTO `user`( `name`, `unm`, `email`, `phone`, `pass`, `address`) VALUES ('".$name."','".$unm."','".$email."','".$phone."','".$pass."','".$address."')";
    // echo"<pre>";
    // print_r($sel);
    // exit; 
    if(mysqli_query($conn,$sel)or die("insert failed")){
        echo json_encode(array("messge"=>"user register success","status"=>true));
    }else{
        echo json_encode(array("messge"=>" fail user not  register ","status"=>false));
    
    }
}


?>