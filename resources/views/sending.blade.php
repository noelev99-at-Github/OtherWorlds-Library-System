<?php  


if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pssword'])) {
	include 'dp_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$email = validate($_POST['email']);
    $pssword = validate($_POST['password']);

	if (empty($username) || empty($email) || empty($pssword)){
		header("Location: createUser.html");
	}else {
		$sql = "INSERT INTO login_information (Username, Email, Pssword) VALUES('$username', '$email', '$pssword')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: homePage.html");
		}else {
			echo "Your account could not be added!";
		}
	}

}else {
	header("Location: createUser.html");
}

?> 