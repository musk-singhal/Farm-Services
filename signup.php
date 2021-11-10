<?php
    $user_name= $_GET["user1"];
    $pass_word = $_GET["passw1"];
    $nameuser = $_GET["nam"];
    $address_user =$_GET["address"];
    $email_user = $_GET["email"];
      $e = explode("@",$email_user);
    $phone_user =$_GET["num"];

    $conn = mysql_connect("localhost","root","tiger") or die ("unsuccessful1");
     $db= mysql_select_db("serviecs",$conn)
            or die ("unsuccessful1");
     //echo  $user_name;
     // echo  $pass_word;
    //  echo  $nameuser;
   $query = "insert into userinfo values ('$user_name','$pass_word','$nameuser','$e[0]','$address_user','$phone_user')";
   //echo $query;
  $res = mysql_query($query);
//echo $res;

  
 

   if($res){

   
            echo "<h1>Successful</h1><br>";
            echo "<h1>Welcome :$user_name</h1>"; 


       }


      else{

 
            //echo "<h1>uns</h>";
            echo "<h1>Already registered</h>";

       }



  
?>

