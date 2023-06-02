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
    
    
	function select_where($tbl,$where)
	{
		$sel="select * from $tbl where 1=1";  // 1=1 means query continue
		$i=0;
		$col=array_keys($where);// array("0"=>"unm","1"=>"pass")  
		$value=array_values($where);// array("0"=>"rajesh","1"=>"1234")  
		foreach($where as $w)
		{
			echo $sel.=" and $col[$i]='$value[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
    
    function insert($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $col=implode(",",$col_arr);

        $value_arr=array_values($arr);
        $value=implode("','",$value_arr);

       echo  $sel="insert into $tbl($col) values('$value')";
        $run=$this->conn->query($sel);
        return $run;
    }
}
$obj=new model;
?>