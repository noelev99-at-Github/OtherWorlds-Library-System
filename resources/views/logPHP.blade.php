<?php 

session_start();

	include("dp_conn_login.blade.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$pssword = $_POST['pssword'];

		if(!empty($username) && !empty($pssword) && !is_numeric($username))
		{
            

			//read from database
			$usename = "localhost";
			$email = "root";
			$pssword = "";
			$db_name = "library_management_system";
			$conn = mysqli_connect($usename, $email, $pssword, $db_name);

			$query = "select * from user_login_information where Username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Pssword'] === $pssword)
					{

						$_SESSION['username'] = $user_data['username'];
						header("Location: homePage.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>