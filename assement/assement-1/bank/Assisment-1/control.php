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

						
				case '/serach_customer':
					$user_arr=$this->select('useraccount');
							include_once('serach_customer.php');
							break;

				case '/view':
					 $user_arr=$this->select('useraccount');


					
					// $where=array("user_id"=>$_SESSION['user_id']);

				 	//  $res=$this->select_where('useraccount',$where);
					//  $fetch=$res->fetch_object();
					     include_once('view.php');
								break;

				case '/edit_book':

					$user_arr=$this->select('useraccount');
				

					include_once('edit_book.php');
					break;

				case '/view.balance':
					$user_arr=$this->select('useraccount');

					include_once('view.balance.php');
					break;
					
				case '/withdraw':
					$user_arr=$this->select('useraccount');

					if(isset($_REQUEST['submit']))
						{
							$accountno=$_REQUEST['accountno'];
							$amount=$_REQUEST['amount'];
							$user_id=$_REQUEST['user_id'];

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("accountno"=>$accountno,"amount"=>$amount,"create_dt"=>$create_dt,"user_id"=>$user_id);
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
					$user_arr=$this->select('useraccount');
						if(isset($_REQUEST['submit']))
						{
							$accountno=$_REQUEST['accountno'];
							$amount=$_REQUEST['amount'];
							$user_id=$_REQUEST['user_id'];

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("accountno"=>$accountno,"amount"=>$amount,"user_id"=>$user_id,"create_dt"=>$create_dt);
							$res=$this->insert('tranction',$arr);
							if($res)
							{echo"
								
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
						$arr=array("name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone,"accounttype"=>$accounttype,"initialdeposit"=>$initialdeposit,"accountno"=>$accountno,"balnce"=>$balnce,"updated"=>$updated,"delated"=>$delated);
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
							if(isset($_REQUEST['del_user_id']))
					{
						$user_id=$_REQUEST['del_user_id'];
						$where=array("user_id"=>$user_id);
						$res=$this->delete_where('useraccount',$where);
						if($res)
						{
							echo"
							<script>
							alert('delete sucess');
							window.location='edit_book';
							</script>
							";
						}else
						{
							echo"fail";
						}
					}
					break;

					case'/tranction':
						$res=$this->select('useraccount');
						if(isset($_REQUEST['submit']))
						{
							$accountno=$_REQUEST['accountno'];
							$amount=$_REQUEST['amount'];
							$type=$_REQUEST['type'];
							$user_id=$_REQUEST['user_id'];

							date_default_timezone_set('asia/calcutta');
							$create_dt=date('Y-m-d H:i:s');

							$arr=array("accountno"=>$accountno,"amount"=>$amount,"type"=>$type,"create_dt"=>$create_dt,"user_id"=>$user_id);
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