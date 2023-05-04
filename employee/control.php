<?php
include_once('model.php');
class control extends model
{
	function __construct()
	{
        session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO']; //http://localhost/Project/empolyee/control.php	
		switch($path)
		{
			case '/add_cat':
			include_once('add_cat.php');
			break;
	
			case '/add_emp':
			include_once('add_emp.php');
			break;
			
			case '/add_loc':
			include_once('add_loc.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;

			
			case '/profile':
				$where=array("employee_id"=>$_SESSION['employee_id']);
                $res=$this->select_where('employee',$where);
                
                $fetch=$res->fetch_object();
				include_once('profile.php');
				break;
			

			case'/employee':
				if(isset($_REQUEST['submit']))
				{
					$username=$_REQUEST['username'];
					$pass=md5($_REQUEST['pass']);
					$arr=array("username"=>$username,"pass"=>$pass);

					$res=$this->select_where('employee',$arr);
					$chk=$res->num_rows;
					if($chk==1)
					{
						$fetch=$res->fetch_object();
						$status=$fetch->status;
						if($status="unblock")
						{
						//session create

						$_SESSION['employee_id']=$fetch->employee_id;
						$_SESSION['username']=$fetch->username;
						$_SESSION['pass']=$fetch->pass;
						$_SESSION['name']=$fetch->name;


						echo"
						<script>
						alert('login sucess');
						window.location='dashboard';
						</script>
						";
						}
						else
						{
							echo"
							<script>
							alert('Login Failed due to Block Account');
							window.location='employee';
							</script>
							";
						}	
					}
					else
					{
						echo"fail";
					}
				}
		    include_once('index.php');
			break;
			case'/employeelogout':
				unset($_SESSION['employee_id']);
				unset($_SESSION['username']);
				unset($_SESSION['name']);
				echo"
						<script>
						alert('logout sucess');
						window.location='employee';
						</script>
						";
				break;
			
			case '/manage_cat':
			$cat_arr=$this->select('employee');
			include_once('manage_cat.php');
			break;

			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;

			// case '/manage_emp':
			// include_once('manage_emp.php');
			// break;

			case '/manage_loc':
			$loc_arr=$this->select('location');
		    include_once('manage_loc.php');
			break;

			case '/manage_user':
			$user_arr=$this->select('user1');
			include_once('manage_user.php');
			break;

			case '/manageCar_ Adv':
			$caradv_arr=$this->select('caradv');
			include_once('manageCar_ Adv.php');
			break;
			case'/delete':
				if(isset($_REQUEST['del_contact_id']))
				{
					$contact_id=$_REQUEST['del_contact_id'];
					$where=array("contact_id"=>$contact_id);
					$res=$this->delete_where('contact',$where);
					if($res)
					{
						 echo"
						 <script>
						 alert('delete sucess');
						 window.location='manage_contact';
						 <script>
						 ";
					}else
					{
						echo"fail";
					}
				}
				
				if(isset($_REQUEST['del_user_id']))
				{
                   $user_id=$_REQUEST['del_user_id'];
				   $where=array("user_id"=>$user_id);
				   $res=$this->delete_where('user1',$where);
				   if($res)
				   {
					echo "
					<script>
					alert('delete sucess)
					window.location='manage_user'
					<script>
					";
				   }else{
					echo"fail";
				   }
				}

				if(isset($_REQUEST['del_location_id']))
				{
					$loction_id=$_REQUEST['del_loction_id'];
					$where=array("location_id"=>$loction_id);
					$res=$this->delete_where('loaction',$where);
					if($res)
					{
						echo "
						<script>
						alert('delete sucess');
						window.loction='manage_loc'
						";
					}else{
						echo"fail";
					}
				}
				break;

				case'/status':
					if(isset($_REQUEST['status_user_id']))
					{
						$user_id=$_REQUEST['status_user_id'];
						$where=array("user_id"=>$user_id);
						$res=$this->select_where('user1',$where);
						$fetch=$res->fetch_object();
						if($fetch->status=="block")
						{
							$arr=array("status"=>"unblock");
							$res=$this->update('user1',$arr,$where);
							if($res)
							{
								unset($_SESSION['user1']);
								unset($_SESSION['unm']);
								unset($_SESSION['name']);

								echo"
								<script>
								alert('customer block sucesss');
								window.location='manage_user';
								<script>
								";
							}
						}else{
							$arr=array("status"=>"block");
							$res=$this->update('user1',$arr,$where);
							if($res)
							{
								
								unset($_SESSION['user1']);
								unset($_SESSION['unm']);
								unset($_SESSION['name']);

								echo"
								<script>
								alert('customer block success');
								window.location='manage_user';
								<script>
								";
							}
						}
					}
					break;

			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>