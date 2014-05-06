<?php
$server = "localhost";
	$login = "root";
	$password1 = "";
  
        // Connect to the database
       $dbLink = mysqli_connect($server, $login, $password1,'cloudcomp');
        if(mysqli_connect_error()) {
           
            die("MySQL connection failed: ". mysqli_connect_error());
        }
        
     if(  $val=$_GET['mse'])
     {
      switch($val)
      {
          case 41:  $query = "SELECT * from all_data where id=41";break;
          case 42: $query = "SELECT * from all_data where id=42";break;
          case 43:  $query = "SELECT * from all_data where id=43";break;
          case 44: $query = "SELECT * from all_data where id=44";break;
          case 45:  $query = "SELECT * from all_data where id=45";break;
          case 46: $query = "SELECT * from all_data where id=46";break;
          case 47:  $query = "SELECT * from all_data where id=47";break;
          case 48: $query = "SELECT * from all_data where id=48";break;
          case 49:  $query = "SELECT * from all_data where id=49";break;
          case 50: $query = "SELECT * from all_data where id=50";break;
          case 51:  $query = "SELECT * from all_data where id=51";break;
          case 52: $query = "SELECT * from all_data where id=52";break;
          case 53:  $query = "SELECT * from all_data where id=53";break;
          case 54: $query = "SELECT * from all_data where id=54";break;
          case 55: $query = "SELECT * from all_data where id=55";break;
          case 56:  $query = "SELECT * from all_data where id=56";break;
          case 57:  $query = "SELECT * from all_data where id=57";break;
          case 58:  $query = "SELECT * from all_data where id=58";break;
          case 59:  $query = "SELECT * from all_data where id=59";break;
          case 60:  $query = "SELECT * from all_data where id=60";break;
      }
           
      
       $result = mysqli_query($dbLink,$query);
     
       

		while ($row = mysqli_fetch_object($result)) {
                 
			 $name=$row->name; // get image mime type
			$infom =  $row->info; //get image data
                      $image =  $row->image;
                       // $mime =  $row->image_ype;
               // echo "<table border=0>";
               
                //echo "<tr>";
       //echo"<th>";
                       //mysqli_free_result($result); // free mysql results

		//Header( "Content-type: $mime"); 
 echo" <html>";
  echo" <head>";
echo"<style>";
echo"div.background";
  echo"{";
  echo"width:1400px;";
  echo"height:900px;";
 
    echo "}";
echo "div.transbox";
 echo" {";
  echo "width:1200px;";
  echo "height:1500px;";
  echo"margin:30px 50px;";
  echo "background-color:#ffffff;";
  echo "border:0px solid black;";
  echo " opacity:0.8;";
  echo"filter:alpha(opacity=60);"; /* For IE8 and earlier */
  echo"}";
echo "div.transbox p";
  echo"{";
  echo"margin:30px 40px;";
  echo"font-weight:bold;";
  echo"color:#000000;";
  echo"}";
  echo".transbox{";
echo"position:absolute;";
echo"top:355px;";
echo"left:20px;";
echo"}";
echo".two{";
echo"position:absolute;";
echo"top:330px;";
echo"left:100px;";
echo"}";	
echo".one{";
echo"position:absolute;";
echo"top:60px;";
echo"left:200px;";
echo"}";	
echo".four{";
echo"position:absolute;";
echo"top:60px;";
echo"left:600px;";
echo"}";
echo"</style>";
echo"</head>";
	
    echo"<body background=po.jpg>";

echo"<center>";
echo'<img src="en.png" width="1000" height="98" alt="Cup of coffee on saucer" />';
echo"</center>";
echo'<iframe frameborder="0" scrolling="no" width="1350" height="300"
   src="poo.jpg" name="imgbox" id="imgbox" style="position: absolute; top: 100px; left:0px;">';
   echo"</iframe>";
echo'<div class="background">';
echo'<div class="transbox">';
            
       echo"<font size=7 face=Times New Roman color=black>";
       echo "<center>";
                echo"<b>";
                echo  $name; 
                echo"</b>";
               echo"</center>";
                print"<br>";
       echo "<center>";          echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="photo" width="300" height="300">';
                 echo "</center>";
                echo"<font size=4 face=Comic Sans MS color=black>";echo"<p>";echo"&nbsp&nbsp&nbsp&nbsp";
                echo"&nbsp&nbsp&nbsp&nbsp";
                echo"&nbsp&nbsp&nbsp&nbsp";
                echo"&nbsp&nbsp&nbsp&nbsp";
                nl2br($infom);
             echo $infom;echo"</p>";
            echo "</font>";
            echo"<br>";
   //echo"</td>";
   //echo"</tr>";
//   echo"</table>";
                }
                echo"</div>";
        echo"</div>";

echo'<div class="two">';
       
//echo'<form action="next.html">';
//echo'<input type="image" name="exit" src="back.png" alt="radio Button" onMouseOut="this.src='back.png'" style=" height: 50px;width:100px" />';
// echo"</form>";
echo"<font size=5>";
echo"<b>";
echo '<p>Click <a href="MSE_1.html">here</a> to go back</p>';
echo"</font> ";echo"</b>";
 echo"</div>";
echo"</body>";
echo"</html>";
     }
 else {
     echo" <html>";
  echo" <head>";
echo"<style>";
echo"div.background";
  echo"{";
  echo"width:1400px;";
  echo"height:900px;";
 
    echo "}";
echo "div.transbox";
 echo" {";
  echo "width:1200px;";
  echo "height:1500px;";
  echo"margin:30px 50px;";
  echo "background-color:#ffffff;";
  echo "border:0px solid black;";
  echo " opacity:0.8;";
  echo"filter:alpha(opacity=60);"; /* For IE8 and earlier */
  echo"}";
echo "div.transbox p";
  echo"{";
  echo"margin:30px 40px;";
  echo"font-weight:bold;";
  echo"color:#000000;";
  echo"}";
  echo".transbox{";
echo"position:absolute;";
echo"top:355px;";
echo"left:20px;";
echo"}";
echo".two{";
echo"position:absolute;";
echo"top:330px;";
echo"left:100px;";
echo"}";	
echo".one{";
echo"position:absolute;";
echo"top:60px;";
echo"left:200px;";
echo"}";	
echo".four{";
echo"position:absolute;";
echo"top:60px;";
echo"left:600px;";
echo"}";
echo"</style>";
echo"</head>";
	
    echo"<body background=po.jpg>";

echo"<center>";
//echo'<img src="en.png" width="1000" height="98" alt="Cup of coffee on saucer" />';
echo"</center>";
echo'<iframe frameborder="0" scrolling="no" width="1350" height="300"
   src="poo.jpg" name="imgbox" id="imgbox" style="position: absolute; top: 100px; left:0px;">';
   echo"</iframe>";
echo'<div class="background">';
echo'<div class="transbox">';
       echo"<h1>";     
  echo"<center>";    echo"Press VALID BUTTON";
  echo"</center>";echo"</h1>";
      echo "<b>";
// Echo a link back to the main page
echo '<p>Click <a href="MSE_1.html">here</a> to go back</p>';echo"</b>";
          
            echo"</div>";
             echo"</div>";
             
echo"</body>";
echo"</html>";
     
}
    // Close the mysql connection
    $dbLink->close();

 
// Echo a link back to the main page

?>