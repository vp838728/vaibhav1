<?php
include_once('model.php');  // step 1 load model page

class control extends model  // step 2 extends model class for call func
{
	
	function __construct()
	{
		session_start();
		model::__construct();  // step 3 call modell __construct func 
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($path)
		{
			case'/displaycountry':
				$country_arr=$this->select('counrty');
				include_once('displaycountry.php');
				break;
			
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>