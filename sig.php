<html>
<body>

  <form action="home1.html">




<?php
    $un = $_GET["user"];
    $pass = $_GET["passw"];

    $conn = mysql_connect("localhost","root","tiger") or die ("unsuccessful1");
     $db= mysql_select_db("serviecs",$conn)
            or die ("unsuccessful1");
    
     
   $query = "select * from userinfo where username='$un' and password='$pass' ";
   
  $res = mysql_query($query);

  
        $s=mysql_fetch_array($res);   

   if($s){

   
            echo "<h1>Registered Successful</h1><br>";
            echo "<h1>Welcome :$un</h1>"; 


       }


      else{

 
            echo "<h1>Not registered</h>";
            echo "<h1>Please registered</h>";

       }



  
?>


</form>
</body>
</html>
