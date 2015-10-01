 <html>
<body>


<?php
$servername = "localhost";
$username = "b130055cs";
$password = "b130055cs";
$database = "db_b130055cs";

// Create connection
$conn = mysql_connect($servername, $username, $password,$database);

// Check connection
if (mysql_error($conn)) {
   // die("Connection failed: " . $conn->connect_error);
}
echo "LOGIN SUCCESSFUL";


$uname = $_POST['s_username'];
$pwd = $_POST['s_password'];

$sql="SELECT * FROM login WHERE id='".$uname."' AND password='".$pwd."' LIMIT 1";
$res = mysql_query($sql);


if(mysql_num_rows($res) == 1)
{
	echo "You have successfully logged in.";
	exit();
}
else
{
	echo "Invalid login information.";
	exit();
}

?>

</body>
</html>
