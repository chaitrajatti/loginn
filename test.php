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
          case 1:  $query = "SELECT * from all_data where id=1";break;
          case 2: $query = "SELECT * from all_data where id=2";break;
          case 3:  $query = "SELECT * from all_data where id=3";break;
          case 4: $query = "SELECT * from all_data where id=4";break;
          case 5:  $query = "SELECT * from all_data where id=5";break;
          case 6: $query = "SELECT * from all_data where id=6";break;
          case 7:  $query = "SELECT * from all_data where id=7";break;
          case 8: $query = "SELECT * from all_data where id=8";break;
          case 9:  $query = "SELECT * from all_data where id=9";break;
          case 10: $query = "SELECT * from all_data where id=10";break;
          case 11:  $query = "SELECT * from all_data where id=11";break;
          case 12: $query = "SELECT * from all_data where id=12";break;
          case 13:  $query = "SELECT * from all_data where id=13";break;
          case 14: $query = "SELECT * from all_data where id=14";break;
          case 15: $query = "SELECT * from all_data where id=15";break;
          case 16:  $query = "SELECT * from all_data where id=16";break;
          case 17:  $query = "SELECT * from all_data where id=17";break;
          case 18:  $query = "SELECT * from all_data where id=18";break;
          case 19:  $query = "SELECT * from all_data where id=19";break;
          case 20:  $query = "SELECT * from all_data where id=20";break;
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
       echo "<center>";          
	   echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="photo" width="300" height="300">';
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
echo '<p>Click <a href="CP.html">here</a> to go back</p>';
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
echo '<p>Click <a href="CP.html">here</a> to go back</p>';echo"</b>";
            echo"</div>";
             echo"</div>";
             
echo"</body>";
echo"</html>";
 }
    $dbLink->close();

 
// Echo a link back to the main page

?>