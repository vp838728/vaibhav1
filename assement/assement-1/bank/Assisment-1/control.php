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

					case '/index2':
						include_once('index2.php');
						break;
                       
						case '/cindex':
							include_once('cindex.php');
							break;
							
						case '/mindex':
							include_once('mindex.php');
							break;

				case '/add_book':
					
						include_once('add_book.php');
						break;


				case'/login':
					if(isset($_REQUEST['submit']))
					{
						$UNM=$_REQUEST['UNM'];
						$pass=md5($_REQUEST['pass']);

						$arr=array("UNM"=>$UNM,"pass"=>$pass);

						$res=$this->select_where('useraccount',$arr);
						$chk=$res->num_rows;

						if($chk==1)
						{
							$fetch=$res->fetch_object(); // data fetch after function call
                            $_SESSION['user_ID']=$fetch->user_ID;
							$_SESSION['UNM']=$fetch->UNM;
							$_SESSION['pass']=$fetch->pass;
							$_SESSION['name']=$fetch->name;
							 echo"<script>
							 alert('login sucess');
							 window.location='cindex';
							 </script>
							 ";
						}else{
							"echo
							 <script>
							 alert('login not sucess');
							</script>
							";
						}
					}
					include_once('login.php');
					break;
				case'/logout':
					unset($_SESSION['user_ID']);
					unset($_SESSION['name']);
					unset($accountno['UNM']);
					echo"
					<script>
					alert('logout sucess');
					window.location='cindex';
					</script>
					";
					break;			

						
					
				case '/serach_customer':
					$user_arr=$this->select('useraccount');
							include_once('serach_customer.php');
							break;

				case '/viewall':

					$user_arr=$this->select('useraccount');
				

					include_once('viewall.php');
					break;

				case '/view.balance':
					 $where=array("user_id"=>$_SESSION['user_ID']);
					$res=$this->select_where('useraccount',$where);
					$fetch=$res->fetch_object();
					// $user_arr=$this->select('useraccount');

					include_once('view.balance.php');
					break;
					
				case '/view.totalbalnce':
				   $res=$this->select('useraccount');
				   // $user_arr=$this->select('useraccount');

				   include_once('view.totalbalnce.php');
				   break;
					
				case '/withdraw':
					$where=array("user_ID"=>$_SESSION['user_ID']);
					$res=$this->select_where('useraccount',$where);
					$fetch=$res->fetch_object();

					//$user_arr=$this->select('useraccount');

					if(isset($_REQUEST['submit']))
						{
							$accountno=$_REQUEST['accountno'];
							$amount=$_REQUEST['amount'];
							$user_ID=$_SESSION['user_ID'];
							$withdraw=$_REQUEST['withdraw'];
							$initial_balance = $fetch->balnce;
							$new_balance = (int)$initial_balance - (int)$withdraw;
							if($initial_balance <= 0 || $new_balance <= 0)
							{
								echo"
								 <script>
								 alert('Your balance is low');
								 window.location='withdraw';
								 </script>
								";
								break;
							}

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("balnce"=>$new_balance);
							$whr=array("user_ID"=>$user_ID);
							$res=$this->update('useraccount',$arr,$whr);

							$arr=array("user_ID"=>$user_ID,"amount"=>$new_balance,"create_dt"=>$create_dt);
							$res=$this->insert('transaction',$arr);
							if($res)
							{
								echo"
								 <script>
								 alert('with draw sucess');
								 window.location='withdraw';
								 </script>
								";
							}else
							{
								echo"fail";
							}
						}
					include_once('withdraw.php');
					break;


                               
							

					
				case '/deposit':
					
					$where=array("user_ID"=>$_SESSION['user_ID']);
					$res=$this->select_where('useraccount',$where);
					$fetch=$res->fetch_object();

					// $user_arr=$this->select('useraccount');
						if(isset($_REQUEST['submit']))
						{
							// $accountno=$_REQUEST['accountno'];
							// $total=$deposit+$amount;
						   //$amount=$_REQUEST['amount'];
						   $user_ID=$_REQUEST['user_ID'];
						   $balnce=$_REQUEST['balnce'];
						   $initial_balance = $fetch->balnce;
						   $new_balance = (int)$initial_balance + (int)$balnce;

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("balnce"=>$new_balance);
							$whr=array("user_ID"=>$user_ID);
							$res=$this->update('useraccount',$arr,$whr);

							$arr=array("user_ID"=>$user_ID,"amount"=>$new_balance,"create_dt"=>$create_dt);
							$res=$this->insert('transaction',$arr);
							if($res)
							{echo"done
								
								 <script>
								 alert('deposit sucess');
							 window.location='deposit';
							 	 </script>
								 ";
								
							}else
							{
								echo "fail";
							}
						}
					include_once('deposit.php');
					break;
						
				
				case '/addcustomer':
					if(isset($_REQUEST['submit']))
					{
						$UNM=$_REQUEST['UNM'];
						$pass=md5($_REQUEST['pass']);
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						$address=$_REQUEST['address'];
						$phone=$_REQUEST['phone'];
						$accounttype=$_REQUEST['accounttype'];
						$accountno=$_REQUEST['accountno'];
						$balnce=$_REQUEST['balnce'];

						date_default_timezone_set('asia/calcutta');
						$updated=date('Y-m-d H:i:s');
						$delated=date('Y-m-d H:i:s');
						$arr=array("UNM"=>$UNM,"pass"=>$pass,"name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone,"accounttype"=>$accounttype,"accountno"=>$accountno,"balnce"=>$balnce,"updated"=>$updated,"delated"=>$delated);
						$res=$this->insert('useraccount',$arr);

						if($res)
						{
							echo"
							<script>
							alert('register sucess');
							window.location='addcustomer';
							</script>
							";
						}else
						{
							echo"fail";
						}
                    }   
				
						include_once('addcustomer.php');
						break;
						case'/delete':
							if(isset($_REQUEST['del_user_ID']))
					{
						$user_ID=$_REQUEST['del_user_ID'];
						$where=array("user_ID"=>$user_ID);
						$res=$this->delete_where('useraccount',$where);
						if($res)
						{
							echo"
							<script>
							alert('delete sucess');
							window.location='viewall';
							</script>
							";
						}else
						{
							echo"fail";
						}
					}
					break;
					case'/edit':
						if(isset($_REQUEST['edit_user_ID']))
					{
							$user_ID=$_REQUEST['edit_user_ID'];
							$where=array("user_ID"=>$user_ID);
							$res=$this->select_where('useraccount',$where);
							$fetch=$res->fetch_object();
							if(isset($_REQUEST['submit']))
						 {
                              $UNM=$_REQUEST['UNM'];
							  $name=$_REQUEST['name'];
							  $email=$_REQUEST['email'];
							  $address=$_REQUEST['address'];
							  $phone=$_REQUEST['phone'];
							  
							  date_default_timezone_set('asia/calcutta');
							  $updated=date('Y-m-d H:i:s');
							  $arr=array("UNM"=>$UNM,"name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone,"updated"=>$updated);
							  $res=$this->update('useraccount',$arr,$where);
							  if($res)
							  {
								echo"
								<script>
								alert('update sucess');
								window.location='viewall';
								</script>
								";
							  }

						}
						include_once('edit.php');
						break;
					}


					
							default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	
		}
	}	

$obj=new control;
?>