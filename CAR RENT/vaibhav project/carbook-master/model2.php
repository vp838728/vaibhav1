<?php
class model {
    public $conn="";
    function__construct()
    {
        $this->conn=new mysqli('localhost','root','car rent');
    }
    function select($tbl)
    {
        $sel= "select * from $tbl";  //QUERY
        $run=$this->conn->query($sel);
        while($fetch->$run->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
}
$obj=new model;
$obj1->$tbl('employee');
?>