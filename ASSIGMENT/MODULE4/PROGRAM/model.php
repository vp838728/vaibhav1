<?php
class model{
    public $conn="";
    function __construct()
    {
        $this->conn=new mysqli('localhost','root','','country');
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
$obj=new model;
?>