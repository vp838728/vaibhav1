<?php
class model
{
    public $conn = "";
    
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'carrent');
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
    
	function insert($tbl,$arr)
	{
		$col_arr=array_keys($arr);
		$col=implode(",",$col_arr);
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		
		echo $sel="insert into $tbl($col)values('$value')"; // query
		
		$run=$this->conn->query($sel);	 // run query database
		return $run;
	}	
    function select_where($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $value_arr=array_values($arr);
        $sel="select * from $tbl where 1=1"; //query continue
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
    
	
	function update($tbl,$arr,$where)
	{
		$col_arr=array_keys($arr);
		$value_arr=array_values($arr);
		$upd="update $tbl set "; // query continue
		$j=0;
		
		$count=count($arr); // count arr value
		foreach($arr as $w)
		{
			if($count==$j+1)
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]'";
			}
			else
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]',";
				$j++;
			}			
		}
		$wcol_arr=array_keys($where);
		$wvalue_arr=array_values($where);
		$upd.=" where 1=1"; // query continue
		// loop $where 
		$i=0;
		foreach($where as $w)
		{
			$upd.=" and $wcol_arr[$i]='$wvalue_arr[$i]'";
			$i++;	
		}
		 
		$run=$this->conn->query($upd);	 // run query database
		return $run;
	}
}

$obj = new model();
// $result = $obj->select('employee');
// print_r($result);
?>
