<?php
class model
{
    public $conn = "";
    
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'car rent');
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
    
	function insert($tbl,$arr)
	{
		$col_arr=array_keys($arr);
		$col=implode(",",$col_arr);
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		
		echo $sel="insert into $tbl($col) values('$value')"; // query
		
		$run=$this->conn->query($sel);	 // run query database
		return $run;
	}	
    function select_where ($tbl, $arr)
    {
        $col_arr=array_keys($arr);
        $value_arr=array_values($arr);
        $sel="select * from $tbl where 1=1 "; //query continue
        //lopp arr 
        $i=0;
        foreach($arr as $w)
        {
            echo $sel.=" and $col_arr[$i]='$value_arr[$i]'";
            $i++;
        }
        $run=$this->conn->query($sel);
        return $run;
    }
    
	function delete_where($tbl,$arr)
	{
		$col_arr=array_keys($arr);
		$value_arr=array_values($arr);
		$sel="delete from $tbl where 1=1"; // query continue
		// loop $arr 
		$i=0;
		foreach($arr as $w)
		{
			echo $sel.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;	
		}
		$run=$this->conn->query($sel);	 // run query database
		return $run;
	}

}

$obj = new model;
// $result = $obj->select('employee');
// print_r($result);
?>
