<?php
//echo $_POST["firstTime"];

if(!($_POST["firstTime"]==null))
{
	
	require 'connect.php';		

	if (!$conn) {
		die("Could Not connect to data base");
	}
	
	$sql = "select U.EMAIL, U.NAME, L.PASSWORD from USER_TABLE U, LOGIN L where (U.USER_ID = L.USER_ID);";
	$result =  mysqli_query($conn, $sql);
	//var_dump($result);
		
	if ($result->num_rows > 0)
	{
		while ($user = mysqli_fetch_array($result))
		{
		//	var_dump($user);
			if(($user["EMAIL"] == $_POST["s_username"]) && ($user["PASSWORD"] == $_POST["s_password"]))
			{
				$_SESSION['uname'] = $user["NAME"];
				$_SESSION['email'] = $user["EMAIL"];
					header('Location: profile.php') && exit();
			}		
		}
		
		echo "Passowrd doesnt match";
	}
}
else
{
//	echo "first";
	session_destroy();	
}

?>
