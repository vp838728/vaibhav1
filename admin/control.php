<?php
include_once('model.php');  //step1 load model page
class control extends model // step2:extends model class for call function
{
 	function __construct()
	{
		model::__construct(); //step3 call model _constuct func
		$path=$_SERVER['PATH_INFO']; //http://localhost/Project/admin/control.php	
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
			$emp_arr=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			case '/add_cat':
			include_once('add_cat.php');
			break;
			
			case '/manage_cat':
			$cat_arr=$this->select('category');
			include_once('manage_cat.php');
			break;
			
			case '/add_loc':
			include_once('add_loc.php');
			break;
			
			case '/manage_loc':
			$loc_arr=$this->select('location');
			include_once('manage_loc.php');
			break;
			
			case '/manage_user':
			$user_arr=$this->select('user1');
			include_once('manage_user.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;
			case '/manageCar_ Adv':
			$caradv_arr=$this->select('caradv');
				include_once('manageCar_ Adv.php');
				break;

			case '/view_booking':
			$booking_arr=$this->select('booking');
			include_once('view_booking.php');
			break;

			case '/view_review':
			$review_arr=$this->select('review');
			include_once('view_review.php');
			break;
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>