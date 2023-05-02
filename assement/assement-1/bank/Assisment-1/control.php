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

				case '/view':


					
					$where=array("user_ID"=>$_SESSION['user_ID']);

				 	$res=$this->select_where('useraccount',$where);
					 $fetch=$res->fetch_object();
					     include_once('view.php');
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
					
				case '/withdraw':
					$user_arr=$this->select('useraccount');

					if(isset($_REQUEST['submit']))
						{
							$accountno=$_REQUEST['accountno'];
							$amount=$_REQUEST['amount'];
							$user_ID=$_REQUEST['user_ID'];
							$withdraw=$_REQUEST['withdaw'];
							$balnce=$_REQUEST['balnce'];
							$total=($balnce-$withdraw);


							echo"the total number of =.$total.";

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("accountno"=>$accountno,"amount"=>$amount,"create_dt"=>$create_dt,"user_ID"=>$user_ID,"withdraw"=>$withdraw,"balnce"=>$balnce);
							$res=$this->insert('tranction',$arr);
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
						   $amount=$_REQUEST['amount'];
						   $user_ID=$_REQUEST['user_ID'];
						   $balnce=$_REQUEST['balnce'];
						   

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("amount"=>$amount,"user_ID"=>$user_ID,"balnce"=>$balnce,"create_dt"=>$create_dt);
							$res=$this->insert('deposit',$arr);
							if($res)
							{echo"done
								
							// 	 <script>
							// 	 alert('deposit sucess');
							//  window.location='deposit';
							// 	 </script>
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
						$initialdeposit=$_REQUEST['initialdeposit'];
						$accountno=$_REQUEST['accountno'];
						$balnce=$_REQUEST['balnce'];

						date_default_timezone_set('asia/calcutta');
						$updated=date('Y-m-d H:i:s');
						$delated=date('Y-m-d H:i:s');
						$arr=array("UNM"=>$UNM,"pass"=>$pass,"name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone,"accounttype"=>$accounttype,"initialdeposit"=>$initialdeposit,"accountno"=>$accountno,"balnce"=>$balnce,"updated"=>$updated,"delated"=>$delated);
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

					case'/tranction':
						$where=array("user_ID"=>$_SESSION['user_ID']);
						$res=$this->select_where('tranction',$where);
						$fetch=$res->fetch_object();

						$user_arr=$this->select('useraccount');
						if(isset($_REQUEST['submit']))
						{
							$accountno=$_REQUEST['accountno'];
							$amount=$_REQUEST['amount'];
							$type=$_REQUEST['type'];
							$user_ID=$_REQUEST['user_ID'];

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("accountno"=>$accountno,"amount"=>$amount,"type"=>$type,"create_dt"=>$create_dt,"user_ID"=>$user_ID);
							$res=$this->insert('tranction',$arr);
							if($res)
							{
								echo"
								<script>
								alert('tranction sucess');
								window.location='tranction.php';
								</script>
								";
							}else
							{
								echo"fail";
							}
						}
						include_once('tranction.php');
						 break;

					
							default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	
		}
	}	

$obj=new control;
?>