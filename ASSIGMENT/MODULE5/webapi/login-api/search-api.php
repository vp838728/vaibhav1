<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require("db.php");
$data=json_decode(file_get_contents("php://input"),true);
$unm=$data["unm"];
$query="SELECT* From user Where unm like '%".$unm."%'";
// echo"<pre>";
// print_r($query);
// die;
$res=mysqli_query($conn,$query) or die("search query fail");
$count=mysqli_num_rows($res);
if($count>1){
    $output=mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    echo json_encode(array('message' => 'No user Found.', 'status' => false));

}
?>