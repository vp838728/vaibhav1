<?php
require_once("db.php");
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);
$unm = $data['unm'];
$pass = $data['pass'];

$sql = "SELECT * FROM user WHERE unm='".$unm."' AND pass='".$pass."'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    echo json_encode(array("message" => "login success", "status" => true));
} else {
    echo json_encode(array("message" => "login fail", "status" => false));
}

?>
