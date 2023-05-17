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
case '/form':
if(isset($_REQUEST['submit']))
{
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $password=$_REQUEST['password'];
    $cpassword=$_REQUEST['cpassword'];
    $address=$_REQUEST['address'];
    $email=$_REQUEST['email'];
    $gen=$_REQUEST['gen'];

	$file=$_FILES['file']['name'];
	$path='file/user1/'.$file;
	$tmp_file=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp_file,$path);


	date_default_timezone_set('asia/calcutta');
	$create_dt=date('Y-m-d H:i:s');
	$updated_dt=date('Y-m-d H:i:s');
	$delete_dt=date('Y-m-d H:i:s');
    

    $arr=array("fname"=>$fname,"lname"=>$lname,"password"=>$password,"cpassword"=>$cpassword,"address"=>$address,"email"=>$email,"gen"=>$gen,"file"=>$file,"create_dt"=>$create_dt,"updated_dt"=>$updated_dt,"delete_dt"=>$delete_dt);
    $res=$this->insert('user',$arr);
    if($res)
    {
        echo"done
		 <script>
         alert('rgister sucess');
         window.location='form';
         </script>
        ";
    }else{
        echo"fail";
    }

}include_once('form.php');
break;

					case '/display':
						$user_arr=$this->select('user');
						include_once('display.php');
						break;
                    case'/delete':
						if(isset($_REQUEST['del_user_id']))
						{
							$user_id=$_REQUEST['del_user_id'];
							$where=array("user_id"=>$user_id);
							$res=$this->delete_where('user',$where);
							if($res)
							{
								echo"done
								 <script>
								 alert('delete sucess');
							 window.location='display';
								 </script>
								";
							}else
							{
								echo "fail";
							}


						}
						break;
						case'/edit':
							if(isset($_REQUEST['edit_user_id']))
							{
								$user_id=$_REQUEST['edit_user_id'];
								$where=array("user_id"=>$user_id);
								$res=$this->select_where('user',$where);
								$fetch=$res->fetch_object();
								// $res=$this->select_where('user',$where);
								// $fetch=$res->fetch_object();
								$old_img=$fetch->file;
								if(isset($_REQUEST['submit']))
								{
									$fname=$_REQUEST['fname'];
									$lname=$_REQUEST['lname'];
								
									$address=$_REQUEST['address'];
									$email=$_REQUEST['email'];
									$gen=$_REQUEST['gen'];
								
									$file=$_FILES['file']['name'];
									$path='file/user1/'.$file;
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
								
								
									date_default_timezone_set('asia/calcutta');
									$updated_dt=date('Y-m-d H:i:s');
									if($_FILES['file']['size']>0)
									{
										
									$file=$_FILES['file']['name'];
									$path='file/user1/'.$file;
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
									}
									
								
									$arr=array("fname"=>$fname,"lname"=>$lname,"address"=>$address,"email"=>$email,"gen"=>$gen,"file"=>$file,"updated_dt"=>$updated_dt);
									$res=$this->update('user',$arr,$where);
									if($res)
									{
										unlink('file\user1'.$old_img);
										echo"
										<script>
										alert('upadte sucess');
										window.location='display';
										</script>
										";
										
									}else
									{
										
									$arr=array("fname"=>$fname,"lname"=>$lname,"address"=>$address,"email"=>$email,"gen"=>$gen,"updated_dt"=>$updated_dt);
									$res=$this->update('user',$arr,$where);
								
									if($res)
									{
										echo"
										<script>
										alert('update sucess');
										window.location='display';
										</script>
										";
									}
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