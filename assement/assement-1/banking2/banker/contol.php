<?php
include_once('model2.php');
 
class control extends model
{
    function __construct()
    {
        model::__construct();
        $path=$_SERVER['PATH_INFO'];
        switch($path)
        {
            case '/tranction':
                include_once('tranction.php');
                break;

                case'\view':
                    include_once('view.php');
                    break;

                    case'/viewall':
                        $view_arr=$this->select('useraccount');
                        include_once('viewall.php');
                        break;

                    case'/add_customer':
                        if(isset($_REQUEST['submit']))
                        {
                            $name=$_REQUEST['name'];
                            $email=$_REQUEST['email'];
                            $address=$_REQUEST['address'];
                            $phone=$_REQUEST['phone'];
                            $accounttype=$_REQUEST['accounttype'];
                            $initialdeposit=$_REQUEST['initialdeposit'];
                            $accountno=$_REQUEST['accountno'];
                            
                            date_default_timezone_get('asia/calcutta');
                            $updated=date('Y-m-d H:i:s');
                            $delated=date('Y-m-d H:i:s');
                            $arr=array("name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone,"accounttype"=>$accounttype,"initialdeposit"=>$initialdeposit,"accountno"=>$accountno,"updated"=>$updated,"delated"=>$delated);
                            $res=$this->insert('useraccount',$arr);

                            if($res)
                            {
                                echo"
                                <script>
                                alert('register sucess');
                                window.location='view.php';
                                <script>
                                ";
                            }else
                            {
                                echo"fail";
                            }

                        }
                        include_once('add_customer.php');
                        break;
                        
                        default:
                        echo"</h1> PAGE NOT FOUND";
                        break;

                        

                         

        }
    }
}
$obj=new control;
?>