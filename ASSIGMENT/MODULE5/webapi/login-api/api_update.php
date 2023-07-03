<?php
require("db.php");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];
$name=$data['name'];
$unm=$data['unm'];
$email=$data['email'];
$phone=$data['phone'];
$address=$data['address'];
$query="UPDATE  user  SET `unm`='".$unm."',`name`='".$name."',`unm`='".$unm."',`email`='".$email."',`phone`='".$phone."',`address`='".$address."' WHERE id='".$id."'";
// echo"<pre>";
// print_r($query);
// exit;
if(mysqli_query($conn,$query)or die("update fail")){
    echo json_encode(array("messge"=>"user update success","status"=>true));
}else{
    echo json_encode(array("messge"=>" fail user not  update ","status"=>false));

}
?>