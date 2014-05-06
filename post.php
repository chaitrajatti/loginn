<?php
	
	error_reporting(E_ALL);
	$server = "localhost";
	$login = "root";
	$password1 = "";
  
		
	$name = $_GET["name"];
	$email = $_GET["email"];
        $password=$_GET["password"];
        $mobile= $_GET["mobile"];
        $address = $_GET["address"];
	
	
 
	$link = mysqli_connect($server, $login, $password1,'india');
	if (!$link) {
		die("\n<BR>Could not connect $server:" .  mysqli_error());
	}
  
	
	$query   = "INSERT INTO registration ";
    $query  .= " (name, email, password, mobile, address) ";
    $query  .= " values ";
    $query  .= " ('$name', '$email', '$password', '$mobile','$address') ";

	$result = mysqli_query($link,$query);
  
	if (!$result) {
		$message  = '<BR>Invalid query: ' . mysqli_error() . "\n";
		die($message);
	}
 
            echo"<b><font size=10 face=Times New Roman>Thank you!!!!! Visit again....:-)</font></b>";
 
  
	mysqli_close($link);
  
	exit();

?>
