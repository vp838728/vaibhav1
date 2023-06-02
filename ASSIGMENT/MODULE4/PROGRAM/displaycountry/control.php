<?php
include_once('model.php');  // step 1 load model page

class control extends model  // step 2 extends model class for call func
{
	
	function __construct()
	{
		session_start();
		model::__construct();  // step 3 call modell __construct func 
		
		$page_url=$_SERVER['PATH_INFO']; //http://localhost/students/16th_Jan_PHP_2023/Project/web/control.php	
		switch($page_url)
		{
			case'/displaycountry':
				if(isset($_REQUEST['submit']))
				{
					$cid=$_REQUEST['cid'];
					$sid=$_REQUEST['sid'];
					$arr=array("cid"=>$cid,"sid"=>$sid);
					$res=$this->insert('user',$arr);
					if($res)
					{
						echo"
						<script>
						alert('sucess');
						window.location='displaycountry';
						</script>
						";
					}else{
						echo "fail";
					}
				}
				$country_arr=$this->select('countrys');
				include_once('displaycountry.php');
				break;
				case'/statedata':
					if(isset($_REQUEST['btn']))
					{
						$cid=$_REQUEST['btn'];
						$where=array("cid"=>$cid);
						$state_arr=$this->select_where('state',$where);
						?>
                     <option>--select state--</option>
                       <?php
						foreach($state_arr as $data)
						{
						?>
                      <option value="<?php echo $data->sid;?>">
	                     <?php echo $data->sname;?>
                      </option>

                      <?php
						}
					}
					break;
					
			
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control();
?>