<%-- 
    Document   : index
    Created on : Feb 25, 2013, 10:49:54 PM
    Author     : RAHI
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body backgroung=sky.jpg" >
    <center><b><i> <u><h1><font color="mazenta">WELCOME TO SCHOOLZONE ENCYCLOPEDIA</font></h1></u></i></b>
        <br><br> 
        
       

        <form action="next.html" onSubmit="return validate()">
        
        <table border="0" align="right">
                <tr>
                    <th>UserName</th>
                    <td><input type="text" maxlength="10" id="name" name="name" value=" "/>
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" maxlength="8" id="paswd" name="paswd" value=""/>
                    </td>
                </tr>
                
                <tr>
                    <td><input type="submit" value="login"/>
                    </td>
                </tr>
            </table>
        </form>
        <p align="right"><a href="v.html">Want To Register??</a></p>
        <script language="javascript">
            <!--
            var slideimages=new Array()
function slideshowimages()
{
     for (i=0;i<slideshowimages.arguments.length;i++){
         slideimages[i]=new Image()
         slideimages[i].src=slideshowimages.arguments[i]
    }
}
</script>
<img src="1.jpg" alt="Slideshow Image Script" title="Slideshow Image Script" name="slide" border=0 width=1000 height=400><a href="http://hscripts.com" style="text-decoration:none;cursor:pointer;font-size:12px;color:green;">H</a>
<script type="text/javascript">
slideshowimages("1.jpg","2.jpg","3.jpg","4.jpg","5.gif","6.jpg","7.jpg")
var slideshowspeed=2000
var whichimage=0
function slideit()
{
     if (!document.images)
           return
     document.images.slide.src=slideimages[whichimage].src
     if (whichimage<slideimages.length-1)
              whichimage++
     else
              whichimage=0
      setTimeout("slideit()",slideshowspeed)
}
 slideit()
            function validate()
            {
                var valid=false;
                var name=document.getElementById("name").value;
                var paswd=document.getElementById("paswd").value;
                  var name_re=new RegExp("^[A-Z][a-zA-Z'_]+$","g");
                  var pas_re=new RegExp("^[A-Z][a-zA-Z'_]+$","g");
                  
                   
                  if(name.match(name_re))
                      {
                          if(paswd.match(pas_re))
                              {
                                  
                                                valid=true;
                                      }
                                      
                              
                              else
                                  alert("Password Does not match");
                      }
                      else
                          alert("User name does not match");
                      return valid;
            }
            -->
            
        </script>
    </center>
    </form>
    </body>
</html>
