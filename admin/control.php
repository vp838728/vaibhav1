<?php
include_once('model.php');  // step 1 load model page

class control extends model  // step 2 extends model class for call func
{
	
	function __construct()
	{
		
		model::__construct();  // step 3 call modell __construct func 
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($path)
		{
			case '/admin':
			include_once('index.php');
			break;
	
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			$emp_arr=$this->select('employees');
			include_once('manage_emp.php');
			break;
			
			case '/add_cat':
			include_once('add_cat.php');
			break;
			
			case '/manage_cat':
			include_once('manage_cat.php');
			break;
			
			case '/add_loc':
			include_once('add_loc.php');
			break;
			
			case '/manage_loc':
			$countries_arr=$this->select('countries');
			include_once('manage_loc.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->select('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>