<?php
include_once('model.php');  //step1 load model page
class control extends model // step2:extends model class for call function
{
 	function __construct()
	{
		session_start();
		model::__construct(); //step3 call model _constuct func
		$path=$_SERVER['PATH_INFO']; //http://localhost/Project/admin/control.php	
		switch($path)
		{
			case '/admin':
            if(isset($_REQUEST['login']))
			{
				$anm=$_REQUEST['anm'];
				$apass=md5($_REQUEST['apass']);


				$arr=array("anm"=>$anm,"apass"=>$apass);
				$res=$this->select_where('admin',$arr);
				$chk=$res->num_rows;

				if($chk==1)
				{
					$fetch=$res->fetch_object();
                   //session create
				   $_SESSION['anm']=$fetch->anm;
				   $_SESSION['apass']=$fetch->apass;
				//  /  $_SESSION['Name']=$fetch->Name;
				   echo"
				   <script>
				   alert('login sucess')
				   window.loction='dashboard';
				   </script>
				   ";
				}else
				{

					echo"login fail";
				}
			}
			include_once('index.php');
			break;
	
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$mobile=$_REQUEST['mobile'];
					$email=$_REQUEST['email'];
					$address=$_REQUEST['address'];
					$username=$_REQUEST['username'];
					$pass=$_REQUEST['pass'];

					date_default_timezone_set('asia/calcutta');
					$created= date('Y-m-d H:i:s');
					$updated=date('Y-m-d H:i:s');

					$arr= array("name"=>$name,"mobile"=>$mobile,"email"=>$email,"address"=>$address,"username"=>$username,"pass"=>$pass,"created"=>$created,"updated"=>$updated);
					$res=$this->insert('employee',$arr);
					if($res)
					{
                        echo"
                            <script>
                            alert('register sucess');
                            window.location='add_emp';
                            </scrip>
                            ";
                    }
					else
                    {
                        echo"not sucess";
                    }
				}
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			$emp_arr=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			case '/add_cat':
				if(isset($_REQUEST['submit']))
				{
					$category_name=$_REQUEST['category_name'];
					
					date_default_timezone_set('asia/calcutta');
					$created_dt=date('Y-m-d H:i:s');
					$updated_dt=date('Y-m-d H:i:s');

					$arr=array("category_name"=>$category_name,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
					$res=$this->insert('category',$arr);
					if($res)
					{
						echo"
						<script>
						alert('catogory sucess');
						window.location='add_cat';
						</script>
                         ";
			
					}else
					{
						echo"
						<script>
						alert('not success');
						</srcipt>
						";
					}
				}
			include_once('add_cat.php');
			break;
			
			case '/manage_cat':
			$cat_arr=$this->select('category');
			include_once('manage_cat.php');
			break;
			
			case '/add_loc':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];

					date_default_timezone_set('asia/calcutta');
					$created_dt=date('Y-m-d H:i:s');
					$update_dt=date('Y-m-d H:i:s');

					$arr=array("name"=>$name,"created_dt"=>$created_dt,"update_dt"=>$update_dt);
					$res=$this->insert('location',$arr);
					if($res)
					{
						echo"
						<script>
						alert('register sucess');
						window.location='add_loc';
						</script>
						";
					}
					else
					{
							echo"not sucess";
					}

				}
		
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
			case '/delete':
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
						</script>
						";
					}else{
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
					echo"
					<script>
					alert('delete sucess');
					window.location='manage_user';
					</script>
					";
				  }else{
					echo"fail";
				  }
				}
				if(isset($_REQUEST['del_location_id']))
				{
					$location_id=$_REQUEST['del_location_id'];
					$where=array("location_id"=>$location_id);
					$res=$this->delete_where('location',$where);
					if($res)
					{
						echo"
						<script>
						alert('delete sucess');
						window.location='manage_loc';
						</script>
						";
					}else{
						echo"fail";
					}
				}
				if(isset($_REQUEST['del_BOOKING_ID']))
				{
					$BOOKING_ID=$_REQUEST['del_BOOKING_ID'];
					$where=array("BOOKING_ID"=>$BOOKING_ID);
					$res=$this->delete_where('booking',$where);
					if($res)
					{
						echo"
						<script>
						alert('delete sucess');
						window.location='view_booking';
						</script>
						";
					}else {
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

						if($fetch->status=="BLOCK")
						{
							$arr=array("status"=>"unblock");
							$res=$this->update('user1',$arr,$where);
							if($res)
							{
								echo "
								<script>
								alert('CUSTOMER unblock SUCESS');
								window.location='manage_user';
								</script>
								";
							}
						}else
						{
							$arr=array("status"=>"block");
							$res=$this->update('user1',$arr,$where);
							if($res)
							
							 {
								echo"
							 	<script>
								alert('customer block sucess');
							 	window.location='manage_user';
							  </script>
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