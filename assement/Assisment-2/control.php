<?php
include_once('model.php');
class control extends model
{
        function __construct()
		{
			session_start();
			model::__construct();

			$path=$_SERVER['PATH_INFO'];

			switch ($path)
			
		     
			 {
				case '/index':
					include_once('index.php');
					break;

				case '/add_book':
					
						include_once('add_book.php');
						break;

				case '/delete_book':
					
							include_once('delete_book.php');
							break;
						
				case '/serach_book':
							include_once('serach_book.php');
							break;

				case '/view':
					$user_arr=$this->select('useraccount');


					
				//   $where=array("user_id "=>$user_id);

				// 	 $res=$this->select_where('useraccount',$where);
				// 	 $fetch=$res->fetch_object();
					     include_once('view.php');
								break;

				case '/view_emp':

					$emp_arr=$this->select('employee1');
				

					include_once('view_emp.php');
					break;

				case '/change_pass':
					include_once('change_pass.php');
					break;
				
				case '/addemp':
					if(isset($_REQUEST['submit']))
					{
						$name=$_REQUEST['name'];
						$lname=$_REQUEST['lname'];
						$email=$_REQUEST['email'];
						$phone=$_REQUEST['phone'];
                        $Address=$_REQUEST['Address'];
						$gen=$_REQUEST['gen'];
						$password=$_REQUEST['password'];
						$cpassword=$_REQUEST['cpassword'];
					

						date_default_timezone_set('asia/calcutta');
						$updated=date('Y-m-d H:i:s');
						$delated=date('Y-m-d H:i:s');
						$arr=array("name"=>$name,"lname"=>$lname,"email"=>$email,"phone"=>$phone,"Address"=>$Address,"gen"=>$gen,"password"=>$password,"cpassword"=>$cpassword,"updated"=>$updated,"delated"=>$delated);
						$res=$this->insert('employee1',$arr);

						if($res)
						{
							echo"
							<script>
							alert('register sucess');
							window.location='addemp';
							</script>
							";
						}else
						{
							echo"fail";
						}
                    }   
				
						include_once('addemp.php');
						break;
						case'/edit':
							if(isset($_REQUEST['edit_emp_id']))
							{
								$emp_id=$_REQUEST['edit_emp_id'];
								$where=array("emp_id"=>$emp_id);
								$res=$this->select_where('employee1',$where);
								$fetch=$res->fetch_object();
								if(isset($_REQUEST['submit']))
						{
									
						          $name=$_REQUEST['name'];
					    	     $lname=$_REQUEST['lname'];
						          $email=$_REQUEST['email'];
						          $phone=$_REQUEST['phone'];
                                 $Address=$_REQUEST['Address'];
						          $gen=$_REQUEST['gen'];
						          $password=$_REQUEST['password'];
						          $cpassword=$_REQUEST['cpassword'];
					

						     date_default_timezone_set('asia/calcutta');
						      $updated=date('Y-m-d H:i:s');
						      $arr=array("name"=>$name,"lname"=>$lname,"email"=>$email,"phone"=>$phone,"Address"=>$Address,"gen"=>$gen,"password"=>$password,"cpassword"=>$cpassword,"updated"=>$updated);
						        $res=$this->update('employee1',$arr,$where);

						       if($res)
						       {
							echo"
							<script>
							alert('update sucess');
							window.location='view_emp';
							</script>
							";
						   }else
						   {
							echo"fail";
						   }
						}
					}
							include_once('edit.php');
							break;
						


					
							default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	
		}
	}	

$obj=new control;
?>