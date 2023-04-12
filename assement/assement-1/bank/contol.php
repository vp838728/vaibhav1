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
                            if(isset($_REQUEST['Save Account']))
                            {
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $name=$_POST['name'];
                                $balance=$_POST['balance'];
                                $cnic=$_POST['cnic'];
                                $number=$_POST['number'];
                                $city=$_POST['city'];
                                $address=$_POST['address'];
                                $source=$_POST['source'];
                                $accountNo=$_POST['accountNo'];
                                $bid=$_POST['bid'];
                                $accountType=$_POST['accountType'];
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