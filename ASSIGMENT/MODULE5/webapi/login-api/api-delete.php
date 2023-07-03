<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data_arr=json_decode(file_get_contents("php://input"),true);
// $data_arr = json_decode(file_get_contents("php://input"), true);

$id=$data_arr['id'];

require("db.php");
$query="DELETE from user WHERE id='".$id."'";


if(mysqli_query($conn,$query)or die("delete fail")){
    echo json_encode(array("messge"=>"user delete success","status"=>true));
}else{
    echo json_encode(array("messge"=>" fail user not  delete ","status"=>false));

}
?>
