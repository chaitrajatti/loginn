<?php

	
	error_reporting(E_ALL); // report all errors
	
	$mysql_server = "localhost"; //enter mysql server name
	$mysql_login =  "root"; // enter mysql login name
	$mysql_password = ""; // enter mysql password
	
	if (!isset($_POST["password"])) { //if id is not given
		//echo "\n<BR><B><FONT color=\"#FF0000\">Invalid Input </FONT></B>";
		//echo "\n<BR><b>Usage:</b> getimage.php?id=&lt;imageid&gt;";
		exit();
		
	} else {
		$id = (int) $_POST["password"]; // get image id
		
		if ($id == "") {
			//echo "\n<BR><B><FONT color=\"#FF0000\">Invalid Input </FONT></B>";
			//echo "\n<BR><b>Usage:</b> getimage.php?id=&lt;imageid&gt;";
			exit();
		}
		
		$link = mysql_connect($mysql_server, $mysql_login, $mysql_password); // connect to mysql server
		
		if (!$link) {
			die('<BR>Could not connect: ' . mysql_error());
		}

		$db_selected = mysql_select_db("project"); // select image database
		
		if (!$db_selected) {
			die ('<BR>Can\'t use database : ' . mysql_error());
		}


		$sql  = "SELECT password FROM login WHERE password='$id'";
		  echo"poo";
		$result = mysql_query($sql);
              
		
		if ($result) {
                   echo '<p>Click <a href="next.html">here</a> to go back</p>';
			//echo "\n<BR>Could not successfully run query ($sql) from database: " . mysql_error();
			//exit;
		}
	
		if (!$result) {
			echo "\n<BR>No data found, nothing to display";
			echo '<p>Click <a href="first.html">here</a> </p>';
		}

		while ($row = mysql_fetch_assoc($result)) {
                        $name=$row['name'];
                       // $id1=$row['login_id'];
                        //$psw=$row['password'];
			//$mime =  $row["image_type"]; // get image mime type
			//$data =  $row["image_data"]; //get image data
		}

		mysql_free_result($result); // free mysql results

		Header( "Content-type: $mime"); 
                                   // sends raw header
		//echo $data; 
                echo $name;
                //echo $id1;
                //echo $psw;
                
               // sends image data
		mysql_close($link); // close link
		exit();
	}
?>