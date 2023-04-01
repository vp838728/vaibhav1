<?php

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

            case '/about':
                include_once('about.php');
                break;

            case '/services':
                include_once('services.php');
                break;

            case '/pricing':
                include_once('pricing.php');
                break;

            case '/car':
                include_once('car.php');
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
                    $pass=$_REQUEST['pass'];
                    
                    $arr=array("unm"=>$unm,"pass"=>md5($pass));
                    
                    $res=$this->select_where('user1',$arr);
                    $chk=$res->num_rows;
                    if($chk==1)
                    {
                        $fetch=$res->fetch_object();
                        //create the session
                        $_SESSION['user_id']=$fetch->user_id;
                        $_SESSION['unm']=$fetch->unm;
                        $_SESSION['pass']=$fetch->pass;
                        echo "
                        <script>
                        alert('login sucess');
                        window.location='index';
                        </script>
                        ";
                    }
                    else{
                        echo"
                        <script>
                        alert('not sucess');
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
                    $file=$_FILES['file']['name'];
                    $path='UPLOAD/USER1'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);
                    $arr=array("name"=>$name,"unm"=>$unm,"pass"=>$pass,"gen"=>$gen ,"lag"=>$lag,"cid"=>$cid,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);

                    $res=$this->insert('user1',$arr);
                    if($res)
                    {
                        echo"
                            <script>
                            alert('register sucess');
                            window.location='index';
                            </>
                            ";
                    }
                    else
                    {
                        echo"not sucess";
                    }

                }
                include_once('sign.php');
                break;

            default:
                echo "<h1>Page Not Found</h1>";
                break;

		}
	}	
}
$obj=new control();
?>