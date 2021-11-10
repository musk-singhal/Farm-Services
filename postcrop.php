<html>

  <head><title>Posted Crops</title>
  <style>

 #key ul{
                    
                list-style:none;
                 position:relative;
                 
         }

#key ul li a{

           display:block;
            color:black;
            text-decoration:none;
             

        }
 #key ul li {
    
                 line-height:40px;
                 text-align:center;
                 float:left;
                  font-size:18px; 
                  text-decoration:none;
                   padding:20px;
                 margin-left:150px;
                  margin-top:10px;
       }

  #key ul li a:hover{

           display:block;
            color:red;
            text-decoration:none;
             

        }

 
      </style>
</head>

 

 <body>

   <h1> POSTED 
CROPS LISTS</h1>
   <table border=2px solid black  text-align=center>
<?php
   

    

    $conn = mysql_connect("localhost","root","tiger") or die ("unsuccessful1");
     $db= mysql_select_db("serviecs",$conn)
            or die ("unsuccessful1");
    
   $query = "Select * from cropinfo";
   
  $res = mysql_query($query);
 // echo $res;
  echo "<tr>";
  echo "<td> SELLER NAME </td>";
  echo "<td> CROP NAME </td>";
  echo "<td> CROP SPECIES</td>";
  echo "<td> Quantity </td>";
  echo "<td> Rate/Kg  </td>";
  echo "<td> Address </td>";
  echo "<td> Phone No </td>";
  echo "</tr>";

  while ($r = mysql_fetch_array($res)){
       echo "<tr>";

      echo "<td>".$r["sellname"]."</td>";
      echo "<td>".$r["cropname"]."</td>";
      echo "<td>".$r["cropspecies"]."</td>";
      echo "<td>".$r["quantity"]."</td>";
      echo "<td>".$r["rateperkg"]."</td>";
      echo "<td>".$r["address"]."</td>";
      echo "<td>".$r["phoneno"]."</td>";
   
      echo "</tr>";
 
 } 
?>
</table>
  <div id=key>
  <ul>
       <center>
     <li><a href="edit.html">Edit</a></li>               
     <li><a href="delete.html">Delete</a></li>
     </center>
  </ul>
</div> 

          

</body>
</html>

 

   


  
