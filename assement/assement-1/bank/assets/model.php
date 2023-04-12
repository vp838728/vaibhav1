<?php
class model
{
    public $conn ="";
    
    function __construct()
    {
        $this->conn = new mysqli('localhost','root','','bank');
    }

    function select($tbl)
    {
        $sel="select *form $tbl";
        $run=$this->conn->query($sel);
        $arr=[];
        while($fetch =$run->fetch_object()) {
            $arr[] =$fetch;
        }
        return $arr;
    }
    function insert($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $col=implode(",",$col_arr);

        $value_arr=array_values($arr);
        $value=implode("','",$value_arr);
        echo $sel="insert into $tbl($col) values('$value')";   //query

        $run=$this->conn->query($sel);
        return $run;
    }

    function select_where($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $value_arr=array_keys($arr);
        $sel="select *from $tbl where 1=1"; //query continue

        $i=0;

        foreach($arr as $w)
        {
            echo $sel.="and $col_arr[$i]='$value_arr[$i]'";
            $i++;
        }
        $run=$this->conn->query($sel);
        return $run;
    }
    function delete_where($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $value_arr=array_keys($arr);
        $sel="delete from $tbl where 1=1"; //query continue
        $i=0;
        foreach($arr as $w)
        {
            echo $sel.=" and $col_arr[$i]='$value_arr[$i]'";
            $i++;
        }
        $run=$this->conn->query($sel);
        return $run;
    }

    function update($tbl,$arr,$where)
    {
        $col_arr=array_keys($arr);
        $value_arr=array_values($arr);
        $upd="update $tbl set ";
        $j=0;
        $count=count($arr);
        foreach($arr as $w)
        {
            if($count==$j+1)
            {
                $upd.="$col_arr[$j]='$value_arr[$j]',";
            }
        }
        $wcol_arr=array_keys($where);
        $wvalue_arr=array_keys($where);
        $upd.="where 1=1" ;
        $i=0;
        foreach($where as $w)
        {
            $upd.=" and $wcol_arr[$i]='$value_arr[$i]',";
            $i++;
        }
        $run=$this->conn->query($upd);
        return $run;
    }
}
$obj=new model;
?>