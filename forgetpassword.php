<?php
    $sell_name= $_GET["user1"];
     $pass_word= $_GET["user2"];
    $conn = mysql_connect("localhost","root","tiger") or die ("unsuccessful1");
     $db= mysql_select_db("serviecs",$conn)
            or die ("unsuccessful1");
    
   $query = "update userinfo set  password ='$pass_word' where username='$sell_name' ";
   
  $res = mysql_query($query);
  //echo $res;

  
 

   if($res){

   
            echo "<h1>Successful change password</h1><br>";
           


       }


      else{

 
           
            echo "<h1>Unsuccessful change password</h1>";

       }



  
?>
