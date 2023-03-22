<?php
class model 
{
	public $conn="";
	function __construct()
	{
		
		$this->conn=new mysqli('localhost','root','','bmc_new');	
	}	
	
	function select($tbl)
	{
		$sel="select * from $tbl"; // query
		$run=$this->conn->query($sel);	 // run query database
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
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
	
}
$obj=new model;

?>