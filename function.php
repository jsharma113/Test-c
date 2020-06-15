<?php 

class user{

	private $db;

	function __construct($db)
	{
		$this->db = $db;
		
	}

	public function login()
	{
		session_start();
		$error_msg = '';

		if(isset($_POST['btn']))
		{
			$email = $_POST['email'];
			$pass = md5($_POST['password']);
			$_SESSION['errormsg'] = 'Enter Username and Password';

			if($email != '' AND $pass != '')
			{
				
				$query = "select * from user where email = '$email' AND password = '$pass'";
				$qrun = $this->db->query($query);

				if(mysqli_num_rows($qrun) > 0)
				{

					$impData = explode("/", $email);
					if(isset($impData['1']))
					{
						if($impData['1'] == 'admin')
						{
							$_SESSION['login'] = 'Admin';
							header('location:admin_dasbord.php');
							exit;
						}

					}
					$_SESSION['login'] = 'User';
					header('location:user_dasbord.php');
				}
				else
				{
					$_SESSION['errormsg'] = 'Enter valid Username and Password';
				}	

			}	
			
		}
	
	}

	public function redirect() {
        header("Location:index.php");
    }

	public function logout()
	{

		session_destroy();
        unset($_SESSION['login']);
        unset($_SESSION['errormsg']);
        header('location:index.php');	
			
	}

	
}





 ?>