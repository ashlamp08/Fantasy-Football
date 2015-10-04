<?php
session_start();
	require 'connect.php';		

	if (!$conn) {
		header('Location: index.php') && die("Could Not connect to data base");
	}
	echo $_POST['username'];
	echo $_POST['teamname'];
	echo $_POST['email'];
	echo $_POST['password'];
	
	$sql="select U.EMAIL, U.TEAM_NAME from USER_TABLE U where (U.EMAIL LIKE \"".$_POST['email']."\");";
	
	echo $sql;
	$result = mysqli_query($conn,$sql);
	
	if($result->num_rows >0)
	{
		//echo "1";
		header('Location: index.php')&& die("Email already present");
	}

	$sql="SELECT U.EMAIL, U.TEAM_NAME from USER_TABLE U where U.TEAM_NAME LIKE \"".$_POST['teamname']."\";";
	$result =  mysqli_query($conn, $sql);

	if($result->num_rows >0)
	{
		header('Location: index.php')&& die("teamname already present");
	}
	
	
			
		$_SESSION['username'] = $_POST["username"];
		$_SESSION['email'] = $_POST["EMAIL"];
		$_SESSION['teamname'] = $_POST["teamname"];
		
		$sql="INSERT INTO USER_TABLE (`EMAIL`,`TEAM_NAME`,`NAME`) values (\"".$_POST['email']."\",\"".$_POST['teamname']."\",\"".$_POST['username']."\");";
		$result =  mysqli_query($conn, $sql);
		
		if($result==0)
		{
			header('Location: index.php')&& die("failed to add");
		}
		
		//echo "!";
		$sql="select USER_ID from USER_TABLE where EMAIL like \"". $_POST['email']."\";";
		//echo $sql;
		//echo "<br>";
		$result =  mysqli_query($conn, $sql);
		//print_r( $result);
		$user = mysqli_fetch_array($result);
		$uid = $user['USER_ID'];
			
		$sql = "INSERT INTO LOGIN (`USER_ID`,`PASSWORD`) VALUES (". $uid.","."\"".$_POST['password']."\");";
		$result =  mysqli_query($conn, $sql);
		//echo $sql;

		if($result==0)
		{
			header('Location: index.php')&& die("failed to add 2");
		}
			
		$_SESSION['msg'] = "Registered";
		
		header('Location: transfer.php')&& exit();		
?>
