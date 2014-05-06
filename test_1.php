<?php
$server = "localhost";
	$login = "root";
	$password1 = "";

        // Connect to the database
        $dbLink = mysqli_connect($server, $login, $password1,'cloudcomp');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
      $passwords=$_GET['password'];
     echo $passwords;
          $query = "SELECT * FROM login WHERE password='$passwords'";
   echo"loves";
           
      
       $result=mysqli_query($dbLink,$query);
     
          if(mysqli_num_rows($result)>0) 
                {
               header("Location:next.html");
               
               }
 else
     {
      header("Location:index1.html");
 }
           
   		while ($row = mysqli_fetch_object($result)) {
                 
			 $name=$row->name; // get image mime type
			//$infom =  $row->info; //get image data
                       // $images =  $row->image;
                       // $mime =  $row->image_ype;
               
       echo"<font size=7 face=Times New Roman color=black>";
                echo"<b>";
                echo  $name; 
                echo"dak";
                echo"</b>";
               // echo $infom;
                echo"<br>";
           
                    
              
               
                //echo"<td>";
                //echo"<font size=5 face=Times New Roman color=black>";
             //echo nl2br($share);
            echo "</font>";
            echo"<br>";
   //echo"</td>";
   //echo"</tr>";
//   echo"</table>";
                }
                
             
    // Close the mysql connection
    $dbLink->close();
   
 //echo 'alert("poo");';
echo '<p>Click <a href="MSE.html">here</a> to go back</p>';
?>