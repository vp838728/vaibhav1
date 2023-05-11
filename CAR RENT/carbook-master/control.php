<?php
//  error_reporting(0);

//  error_reporting(0);

include_once('model.php'); //step1 : load model page
class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();
        $path=$_SERVER['PATH_INFO']; //http://localhost/Project/admin/control.php
        switch($path)
        {
            case '/index':
                include_once('index.php');
                break;

             case'/car2':
               $cat_arr=$this->select('category');

               include_once('car2.php');
               break;

            case'/viewbooking':
                // $booking_arr=$this->select('booking1');
                $where=array("user_id"=>$_SESSION['user_id']);
                $res=$this->select_where('booking1',$where);
                
                $fetch=$res->fetch_object();

                    include_once('viewbooking.php');
                    break;

             case'/booking':
                
                if(isset($_REQUEST['submit']))
                {    
                    


                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $moblie=$_REQUEST['moblie'];
                    $adv_id=$_REQUEST['adv_id'];

                    $PICKUPLOCATION=$_REQUEST['PICKUPLOCATION'];
                    $DESTINATION=$_REQUEST['DESTINATION'];
                    $STATE=$_REQUEST['STATE'];
                    $city=$_REQUEST['city'];
                    $user_id=$_SESSION['user_id'];
                    
                     $adv_id=$_REQUEST['adv_id'];
                    
                    date_default_timezone_set('asia/calcutta');
                    $created_dt=date('Y-m-d H:i:s');
                    $updated=date('Y-m-d H:i:s');
                    $deleated_dt=date('Y-m-d H:i:s');
                    $arr=array("name"=>$name,"email"=>$email,"moblie"=>$moblie,"adv_id"=>$adv_id,"PICKUPLOCATION"=>$PICKUPLOCATION,"DESTINATION"=>$DESTINATION,"STATE"=>$STATE,"city"=>$city,"user_id"=>$user_id,"adv_id"=>$adv_id,"created_dt"=>$created_dt,"updated"=>$updated,"deleated_dt"=>$deleated_dt);
                    $res=$this->insert('booking1',$arr);
                    if($res)
                    {
                        echo"
                         <script>
                        alert('thnks for booking your car');
                         window.location='index';
                         </script>
                        ";
                    }
                    else{
                        echo"fail";
                    }
               
                }


                include_once('booking.php');
               break;  


            case '/about':
                include_once('about.php');
                break;

            case '/pricing':
                include_once('pricing.php');
                break;

            case '/car':
                include_once('car.php');
                break;
            case'/booking1':
                $loc_arr=$this->select('location');
                $caradv_arr=$this->select('caradv');

                
                include_once('booking1.php');
                break;

                
            case '/addcaradv':
                $loc_arr=$this->select('location');
                $cat_arr=$this->select('category');
                if(isset($_REQUEST['submit']))
                {
                    $owner_name=$_REQUEST['owner_name'];
                    $car_name=$_REQUEST['car_name'];
                    $vehical_number=$_REQUEST['vehical_number'];
                    $mobile=$_REQUEST['mobile'];
                    $charge=$_REQUEST['charge'];
                    $driver=$_REQUEST['driver'];
                    $address=$_REQUEST['address'];
                    $deposite=$_REQUEST['deposite'];
                    $terms_condition=$_REQUEST['terms_condition'];
                    $location_id=$_REQUEST['location_id'];
                    $category_id=$_REQUEST['category_id'];

                    date_default_timezone_set('asia/calcutta');
                    $updated=date('Y-m-d H:i:s');
                    $deleted=date('Y-m-d H:i:s');

                    $file=$_FILES['file']['name'];
                    $path='UPLOAD/CARADV/'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);

                    $arr=array("owner_name"=>$owner_name,"car_name"=>$car_name,"vehical_number"=>$vehical_number,"mobile"=>$mobile,"charge"=>$charge,"driver"=>$driver,"address"=>$address,"deposite"=>$deposite,"terms_condition"=>$terms_condition,"location_id"=>$location_id,"category_id"=>$category_id,"file"=>$file,"updated"=>$updated,"deleted"=>$deleted);
                    $res=$this->insert('caradv',$arr);
                    if($res)
                    {
                        echo"
                         <script>
                         alert('car adv sucessful');
                         window.location='addcaradv';
                        </script>
                        ";
                    }else
                    {
                        echo"fail";
                    }



                }

                include_once('addcaradv.php');
                break;


            case '/blog':
                include_once('blog.php');
                break;

            case '/contact':
                if(isset($_REQUEST['submit']))
                {
                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $subject=$_REQUEST['subject'];
                     $msg=$_REQUEST['msg'];

                    
                    date_default_timezone_set('asia/calcutta');
                    $created_dt=date('Y-m-d H:i:s');
                    $updated_dt=date('Y-m-d H:i:s');

                    $arr=array("name"=>$name,"email"=>$email,"msg"=>$msg ,"subject"=>$subject,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);

                    $res=$this->insert('contact',$arr);
                    if($res)
                    {
                        echo"
                            <script>
                            alert('contact sucess');
                            window.location='contact';
                            </script>
                            ";
                    }else
                    {
                        echo "not sucess";
                    }
                }
                include_once('contact.php');
                break;

            case '/login':
                if(isset($_REQUEST['submit']))
			{
				$unm=$_REQUEST['unm'];
				$pass=md5($_REQUEST['pass']); 
				
				$arr=array("unm"=>$unm,"pass"=>$pass);
				
				$res=$this->select_where('user1',$arr); // func call  and cond check 
				$chk=$res->num_rows; // check res by rows that cond true or not
			
				if($chk==1) // 1 means true / and 0 means false
				{
					
					$fetch=$res->fetch_object(); // data fetch after function call
					$status=$fetch->status;
					
					if($status=="unblock")
					{
						// session create 
						$_SESSION['user_id']=$fetch->user_id;
						$_SESSION['unm']=$fetch->unm;
						$_SESSION['name']=$fetch->name;
						
						echo "
						<script>
						alert('Login Success');
						window.location='index';
						</script>
						";
					}
					else
					{
						echo "
						<script>
						alert('Login Failed due to Block Account');
						window.location='index';
						</script>
						";
					}
				}
				else
				{
					echo "
					<script>
					alert('Login Failed due to wrong creadential !');
					window.location='login';
					</script>
					";
				}
			}
                include_once('login.php');
                break;
                case'/logout':
                    unset($_SESSION['user_id']);
                    unset($_SESSION['unm']);
                    unset($_SESSION['pass']);
                    unset($_SESSION['name']);
                    echo"
                    <script>
                    alert('logut sucess');
                    window.location='index';
                    </script>
                    ";
                    break;

            case '/sign':
                $countries_arr=$this->select('country');
                if(isset($_REQUEST['submit']))
                {
                    $name=$_REQUEST['name'];
                    $unm=$_REQUEST['unm'];
                    $pass=md5($_REQUEST['pass']);
                    $gen=$_REQUEST['gen'];
                    $lag_arr=$_REQUEST['lag'];
                    $lag=implode(",",$lag_arr);

                    $cid=$_REQUEST['cid'];
                    date_default_timezone_set('asia/calcutta');
                    $created_at=date('Y-m-d H:i:s');
                    $updated_at=date('Y-m-d H:i:s');
                    
                     $file_upload=$_FILES['file_upload']['name'];
                     $path='UPLOAD/USER1/'.$file_upload;
                     $tmp_file=$_FILES['file_upload']['tmp_name'];
                     move_uploaded_file($tmp_file,$path);
                    $arr=array("name"=>$name,"unm"=>$unm,"pass"=>$pass,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"created_at"=>$created_at,"file_upload"=>$file_upload,"updated_at"=>$updated_at);

                    $res=$this->insert('user1',$arr);
                    if($res)
                    {
                        echo"
                            <script>
                            alert('register sucess');
                            window.location='sign';
                            </script>
                            ";
                    }
                    else
                    {
                        echo"not sucess";
                    }

                }
                
                include_once('sign.php');
                break;
                case'/profile':
                    // $where=array("user_id"=>$user_id);
                     $where=array("user_id"=>$_SESSION['user_id']);
                    $res=$this->select_where('user1',$where);
                    
                    $fetch=$res->fetch_object();
                    include_once('profile.php');
                    break;
                    case '/edit':
                        if(isset($_REQUEST['edit_user_id']))
                        {
                            $user_id=$_REQUEST['edit_user_id'];
                            $where=array("user_id"=>$user_id);
                            $res=$this->select_where('user1',$where);
                            $fetch=$res->fetch_object();
                            // get old file for dekte
                            $old_img=$fetch->file_upload;
                            if(isset($_REQUEST['save']))
                            {
                                $name=$_REQUEST['name'];
                                $unm=$_REQUEST['unm'];
                                $gen=$_REQUEST['gen'];
                                $lag_arr=$_REQUEST['lag'];
                                $lag=implode(",",$lag_arr);
                                $cid=$_REQUEST['cid'];
                    
                                date_default_timezone_set('Asia/Kolkata'); // Fixed timezone name
                                $updated_at=date('Y-m-d H:i:s');
                                if($_FILES['file_upload']['size']>0)
                                {
                                    $file_upload=$_FILES['file_upload']['name'];
                                    $path='UPLOAD/USER1/'.$file_upload;
                                    $tmp_file=$_FILES['file_upload']['tmp_name'];
                                    move_uploaded_file($tmp_file,$path);


                                    $arr=array("name"=>$name,"unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"file_upload"=>$file_upload,"cid"=>$cid,"updated_at"=>$updated_at);
                                    $res=$this->update('user1',$arr,$where);
                                    if($res)
                                    {
                                        unlink('UPLOAD/USER1/'.$old_img);

                                         // Fixed spelling of 'success'
                                          echo"
                                          <script>
                                           alert('Update sucess');
                                           window.location='profile';
                                          </script>
                                          ";
                                    } 
                                        
                                }
                                else
                                {
                                    $arr=array("name"=>$name,"unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"updated_at"=>$updated_at);
                                    $res=$this->update('user1',$arr,$where);
                                    if($res)
                                    {
                                         echo "
                                         <script>
                                         alert('Update Success');
                                         window.location='profile';
                                          </script>
                                        ";
                                    }
                                }
                            }
                        }
                        $countries_arr=$this->select('country');
                        include_once('edit_profile.php');
                        break;
                    

            default:
                echo "<h1>Page Not Found</h1>";
                break;

		}
	}	
}
$obj=new control();
?>