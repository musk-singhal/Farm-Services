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
    
   $query = "update cropinfo set cropname='$crop_name',quantity='$quantity',rateperkg='$rate',address='$address',phoneno ='$phone_user' where sellname='$sell_name' and cropspecies='$crop_species'" ;
   
  $res = mysql_query($query);
 //echo $res;

  
 

   if($res){

   
            echo "<h1>Successful update Post Crop</h1><br>";
           


       }


      else{

 
           
            echo "<h1>Unsuccessful  update Post Crop</h1>";

       }



  
?>
