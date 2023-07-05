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
            if(isset($_REQUEST['submit']))
			{
				$anm=$_REQUEST['anm'];
				$apass=md5($_REQUEST['apass']);


				$arr=array("anm"=>$anm,"apass"=>md5($apass));
				$res=$this->select_where('admin',$arr);
				$chk=$res->num_rows;

				if($chk==1)
				{
					$fetch=$res->fetch_object();
                   //session create
				   $_SESSION['aid']=$fetch->aid;
				   $_SESSION['anm']=$fetch->anm;
				   $_SESSION['apass']=$fetch->apass;
				  
				
				   echo"
				   <script>
				   alert('login sucess');
				   window.location='dashboard';
				   </script>
				   ";
				}
				else
				{

					echo"login fail";
				}
			}
			include_once('index.php');
			break;
			case'/adminlogout':
				unset($_SESSION['aid']);
				unset($_SESSION['anm']);
				
				echo
				"<script>
				 alert('logout sucess');
				 window.location='admin';
				 </script>
				 ";
				 break;
	
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/profile':
				$where=array("aid"=>$_SESSION['aid']);
				$res=$this->select_where('admin',$where);
				$fetch=$res->fetch_object();
				include_once('profile.php');
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
					$file=$_FILES['file']['name'];
					$path='upload/employee/'.$file;
					$tmp_file=$_FILES['file']['tmp_name'];
					move_uploaded_file($tmp_file,$path);
					$work=$_REQUEST['work'];

					date_default_timezone_set('asia/calcutta');
					$created= date('Y-m-d H:i:s');
					$updated=date('Y-m-d H:i:s');

					$arr= array("name"=>$name,"mobile"=>$mobile,"email"=>$email,"address"=>$address,"username"=>$username,"pass"=>$pass,"file"=>$file,"work"=>$work,"created"=>$created,"updated"=>$updated);
					$res=$this->insert('employee',$arr);
					if($res)
					{
                        echo"
                             <script>
                             alert('register sucess');
                             window.location='add_emp';
                         </script>
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
					
                    $file=$_FILES['file']['name'];
                    $path='UPLOAD/CARADV/'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);

					$arr=array("category_name"=>$category_name,"file"=>$file,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
					$res=$this->insert('category',$arr);
					if($res)
					{
						echo"done
					// 	 <script>
					// 	  alert('catogory sucess');
					//  window.location='add_cat';
					// 	 </script>
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
				if(isset($_REQUEST['search']))
				{
					$search=$_REQUEST['search'];
					$user_arr=$this->select_search('user1','name',$search);
				}
				else{
			$user_arr=$this->select('user1');
				}
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
			$booking_arr=$this->select('booking1');
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
					$location_id =$_REQUEST['del_location_id'];
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
				if(isset($_REQUEST['del_book_id']))
				{
					$book_id=$_REQUEST['del_book_id'];
					$where=array("book_id"=>$book_id);
					$res=$this->delete_where('booking1',$where);
					if($res)
					{
						echo"
						 <script>
						alert('delete sucess');
						 window.location='view_booking';
						</script>
						";
					}else{
					      echo"fail";
					}
				}
				
				if(isset($_REQUEST['del_category_id']))
				{
					$category_id=$_REQUEST['del_category_id'];
					$where=array("category_id "=>$category_id );
					$res=$this->delete_where('category',$where);
					if($res)
					{
						echo"
						 <script>
						 alert('delete sucess');
						 window.location='manage_cat';
						</script>
						";
					}else{
					      echo"fail";
					}
				}
				
				if(isset($_REQUEST['del_adv_id']))
				{
					$adv_id=$_REQUEST['del_adv_id'];
					$where=array("adv_id "=>$adv_id );
					$res=$this->delete_where('caradv',$where);
					if($res)
					{
						echo"
						 <script>
						 alert('delete sucess');
						 window.location='manageCar_ Adv';
						</script>
						";
					}else{
					      echo"fail";
					}
				}
				if(isset($_REQUEST['del_employee_id']))
				{
					$employee_id=$_REQUEST['del_employee_id'];
					$where=array("employee_id"=>$employee_id);
					$res=$this->delete_where('employee',$where);
					if($res)
					{
						echo"
						<script>
						alert('delete sucess');
						window.location='manage_emp';
						</script>
						";


					}else
					{
						echo "fail";
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
								unset($_SESSION['user1']);
								unset($_SESSION['unm']);
								unset($_SESSION['name']);
								echo"
							 	<script>
								alert('customer block sucess');
							 	window.location='manage_user';
							  </script>
								";
							}
						}
					}

					if(isset($_REQUEST['status_book_id']))
					{
						$book_id=$_REQUEST['status_book_id'];
						$where=array("book_id"=>$book_id);
						$res=$this->select_where('booking1',$where);
						$fetch=$res->fetch_object();

						if($fetch->status=="booking panding")
						{
							$arr=array("status"=>"booking sucess");
							$res=$this->update('booking1',$arr,$where);
							if($res)
							{
								echo"
								<script>
								alert('booking sucess');
								window.location='view_booking';
								</script>
								";
							}
						}else{
							$arr=array("status"=>"booking panding");
							$res=$this->update('booking1',$arr,$where);

							if($res)
							{
								echo"
								<script>
								alert('booking paning');
								window.location='view_booking';
								</script>
								";
							}
						}
					}
					if(isset($_REQUEST['status_employee_id']))
					{
						$employee_id=$_REQUEST['status_employee_id'];
						$where=array("employee_id"=>$employee_id);
						$res=$this->select_where('employee',$where);
						$fetch=$res->fetch_object();

						if($fetch->status=="unblock")
						{
							$arr=array("status"=>"block");
							$res=$this->update('employee',$arr,$where);

							if($res)
							{
								echo"
								<script>
								alert('employee block');
								window.location='manage_emp';
								</script>
								";
							}
						}else
						{
							$arr=array("status"=>"unblock");
							$res=$this->update('employee',$arr,$where);

							if($res)
							{
								echo"
								<script>
								alert('employee unblock');
								window.location='manage_emp';
								</script>
								";
							}
						}
					}
					break;

					case'/editemp':
						if(isset($_REQUEST['edit_employee_id']))
						{
							$employee_id=$_REQUEST['edit_employee_id'];
							$where=array("employee_id"=>$employee_id);
							$res=$this->select_where('employee',$where);
							$fetch=$res->fetch_object();
							$old_img=$fetch->file;
							if(isset($_REQUEST['submit']))
							{
								$name=$_REQUEST['name'];
								$mobile=$_REQUEST['mobile'];
								$email=$_REQUEST['email'];
								$address=$_REQUEST['address'];
								$username=$_REQUEST['username'];
								// $pass=$_REQUEST['pass'];
								
								date_default_timezone_set('asia/calcutta');
								$updated=date('Y-m-d H:i:s');
								if($_FILES['file']['size']>0)
								{
									$file=$_FILES['file']['name'];
									$path='upload/employee/'.$file;
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
								

								$arr=array("name"=>$name,"mobile"=>$mobile,"email"=>$email,"address"=>$address,"username"=>$username,"file"=>$file,"updated"=>$updated);
								$res=$this->update('employee',$arr,$where);
								if($res)
								{
									unlink('upload/employee/'.$old_img);
									echo"done
							    //   <script>
								//  alert('update sucess');
								//   window.location='manage_emp';
								//  </script>
									 ";
								}
								}else{
									
								$arr=array("name"=>$name,"mobile"=>$mobile,"email"=>$email,"address"=>$address,"username"=>$username,"updated"=>$updated);
								$res=$this->update('employee',$arr,$where);
								if($res)
								{
									echo"done
									//  <script>
									//  alert('update sucess');
									//  window.location='manage_emp';
									//  </script>
									";
								}
								}
							}
						}
						include_once('editemp.php');
						break;


			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>