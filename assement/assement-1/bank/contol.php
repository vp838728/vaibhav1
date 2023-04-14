<?php
include_once('model.php');
 require ('assets/model.php');
class control extends model
{
    function __construct()
    {
        model::__construct();
        $path=$_SERVER['PATH_INFO'];
        switch($path)
        {
            case '/index':
                include_once('index.php');
                break;

                case'/mindex':
                    include_once('mindex.php');
                    break;

                    case'/maccounts.php':
                        include_once('maccounts.php');
                        break;

                        
                        case'/accounts':
                            include_once('accounts.php');
                            break;

                        case'/maddnew':
                            $branch_arr=$this->select('branch');
                            if(isset($_REQUEST['submit']))
                            {
                                $email=$_REQUEST['email'];
                                $password=$_REQUEST['password'];
                                $name=$_REQUEST['name'];
                                $balance=$_REQUEST['balance'];
                                $cnic=$_REQUEST['cnic'];
                                $number=$_REQUEST['number'];
                                $city=$_REQUEST['city'];
                                $address=$_REQUEST['address'];
                                $source=$_REQUEST['source'];
                                $accountNo=$_REQUEST['accountNo'];
                                $bid=$_REQUEST['bid'];
                                $accountType=$_REQUEST['accountType'];
                                date_default_timezone_set('asia/calcutta');
                                $date=date('Y-m-d H:i:s');

                                $arr=array("email"=>$email,"password"=>$password,"name"=>$name,"balance"=>$balance,"cnic"=>$cnic,"number"=>$number,"city"=>$city,"address"=>$address,"source"=>$source,"accountNo"=>$accountNo,"bid"=>$bid,"accountType"=>$accountType);
                                $res=$this->insert('useraccounts',$arr);
                                if($res)
                                {
                                    echo"
                                    <script>
                                    alert('register sucess');
                                    window.loaction='index.php';
                                    </script>
                                    ";
                                }
                                
                            }
                            else
                            {
                                echo"fail";
                            }
                            include_once('maddnew.php');
                            break;

                        case'/login':
                            include_once('login.php');
                            break;

                        case'/feedback':
                            include_once('feedback.php');
                            break;
                            
                        case'/mfeedback':
                            include_once('mfeedbak.php');
                            break;
                            
                        case'/show':
                            $view_arr=$this->select('useraccounts');
                            include_once('show.php');
                            break;
                            
                        case'/transfer':
                            include_once('transfer.php');
                            break;
                            
                        case'/notice':
                            include_once('notice.php');
                            break;
                            
                        case'/mnotice':
                            include_once('mnotice.php');
                            break;
                            
                        case'/statements':
                            include_once('statements.php');
                            break;
                            
                        default:
                        echo"</h1>page not found</h1>";
                        break;    

        }
    }
}
$obj=new control();
?>