<?php
class model
{
    public $conn = "";
    
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'car_rent');
    }
    
    function select($tbl)
    {
        $sel = "SELECT * FROM $tbl";
        $run = $this->conn->query($sel);
        $arr = [];
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }
    
    function insert($tbl, $arr)
    {
        $cols = implode(",", array_keys($arr));
        $values = "'" . implode("','", array_map([$this->conn, 'real_escape_string'], array_values($arr))) . "'";
        $sql = "INSERT INTO $tbl ($cols) VALUES ($values)";

        return $this->conn->query($sql);
    }
}

$obj = new model;
// $result = $obj->select('employee');
// print_r($result);
?>
