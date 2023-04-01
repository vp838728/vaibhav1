<?php
class model
{
    public $conn ="";
    
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'car rent');
    }
    
    function select($tbl)
    {
        $sel = "SELECT * FROM $tbl"; // QUERY
        $run = $this->conn->query($sel);
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }
}

$obj = new model();
// $result = $obj->select('employee');
// print_r($result);
?>
