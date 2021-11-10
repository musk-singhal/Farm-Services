<?php
    $sell_name= $_GET["user2"];
    $crop_name = $_GET["nam"];
    $crop_species = $_GET["spec"];
    $quantity =$_GET["quan"];
    $rate= $_GET["kg"];
    $address =$_GET["addr"];
    $phone_user =$_GET["numb"];

    $conn = mysql_connect("localhost","root","tiger") or die ("unsuccessful1");
     $db= mysql_select_db("serviecs",$conn)
            or die ("unsuccessful1");
    
   $query = "insert into cropinfo values ('$sell_name','$crop_name','$crop_species','$quantity','$rate','$address','$phone_user')";
   
  $res = mysql_query($query);
 //echo $res;

  
 

   if($res){

   
            echo "<h1>Successful Post Crop</h1><br>";
           


       }


      else{

 
           
            echo "<h1>Unsuccessful Post Crop</h1>";

       }



  
?>

