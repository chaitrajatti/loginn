<?php
$server = "localhost";
	$login = "root";
	$password1 = "";
  
        // Connect to the database
      $dbLink = mysqli_connect($server, $login, $password1,'cloudcomp');
        if(mysqli_connect_error()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
     if(  $val=$_GET['mse']){
      switch($val)
      {
          case 21:  $query = "SELECT * from all_data where id=21";break;
          case 22: $query = "SELECT * from all_data where id=22";break;
          case 23:  $query = "SELECT * from all_data where id=23";break;
          case 24: $query = "SELECT * from all_data where id=24";break;
          case 25:  $query = "SELECT * from all_data where id=25";break;
          case 26: $query = "SELECT * from all_data where id=26";break;
          case 27:  $query = "SELECT * from all_data where id=27";break;
          case 28: $query = "SELECT * from all_data where id=28";break;
          case 29:  $query = "SELECT * from all_data where id=29";break;
          case 30: $query = "SELECT * from all_data where id=30";break;
          case 31:  $query = "SELECT * from all_data where id=31";break;
          case 32: $query = "SELECT * from all_data where id=32";break;
          case 33:  $query = "SELECT * from all_data where id=33";break;
          case 34: $query = "SELECT * from all_data where id=34";break;
          case 35: $query = "SELECT * from all_data where id=35";break;
          case 36:  $query = "SELECT * from all_data where id=36";break;
          case 37:  $query = "SELECT * from all_data where id=37";break;
          case 38:  $query = "SELECT * from all_data where id=38";break;
          case 39:  $query = "SELECT * from all_data where id=39";break;
          case 40:  $query = "SELECT * from all_data where id=40";break;
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
echo '<p>Click <a href="IM.html">here</a> to go back</p>';
echo"</font> ";echo"</b>";
 echo"</div>";
echo"</body>";
echo"</html>";
    // Close the mysql connection
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
echo '<p>Click <a href="IM.html">here</a> to go back</p>';echo"</b>";
          
            echo"</div>";
             echo"</div>";
             
echo"</body>";
echo"</html>";
     
}
    $dbLink->close();

 
// Echo a link back to the main page

?>