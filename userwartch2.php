
//this page will show the admin all the user information
<!DOCTYPE html>
<html>
<head>
	</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "zamzam";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * FROM zamzamuser ";

$result = mysqli_query($conn,$sql);




      
      while($row = mysqli_fetch_array($result)){
         
         $alluser[]=array(
         'name'=>$row['name'],
         'email'=>$row['email'],
         'address'=>$row['address']
         );

     }

      header('Content-Type: application/json');
      $maeen=array("userregist"=>$alluser);

      echo json_encode($maeen);

     
   ?>
 

</body>
</html>