<!DOCTYPE html>
<html>
<head>
	<title>Try it</title>
	<!-- <meta charset="utf-8"/> -->
	<!-- <meta http-equiv="Content-type" value="text/html; charset=utf-8" /> -->
</head>
<body>
<?php
define("HOST", "localhost");
define("DBUSER", "root");
define("PASS", "bogmojasila");
// define("PASS", "");
define("DB", "yourplace");
$con = mysqli_connect(HOST, DBUSER, PASS, DB);

// $con = mysqli_connect("localhost","root","","ref");
//proverka na svyaz
if (mysqli_connect_errno()) 
{
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"SET CHARSET utf8");
$result = mysqli_query($con,"SELECT * FROM user");
// print_r($result);
foreach ($result as $key) {
	// print_r($key);

	echo $key['name'];
	echo " | ";
	echo $key['surname'];
	echo " | ";
	echo $key['email'];
	echo "<br>";

}
mysqli_close($con);
?>

</body>
</html>