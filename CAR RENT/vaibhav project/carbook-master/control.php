
<?php
include_once('model.php');   //step1 : load model page
class control extends model
{
	function __construct()
	{
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
			include_once('contact.php');
			break;
			
			case '/login':
				include_once('login.php');
				break;

			case '/signup':
				include_once('signup.php');
				break;
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>