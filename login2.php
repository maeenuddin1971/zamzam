//Here this page will receive some data as like phone number and password then it will give //the json array;

//the format is : http://localhost/zamzam/login2.php?phone=01951242823&passwor=maeen


<html>

<body>
<?php
$phone=$_GET['phone'];

$pass=$_GET['passwor'];



$servername = "localhost";
$username = "root";
$password = "";
$database = "zamzam";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * FROM zamzamuser WHERE phone='$phone' AND password='$pass' ";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);


if($count == 1) {
         echo "login success";

 $logininform=array(
 	'phone'=>$phone,
 	'password'=>$pass
 );

header('Content-Type: application/json');
$maeen=array("userrelogin"=>$logininform);

echo json_encode($maeen);


      }else {
     echo "Your phone number and password are not valid";
      }






?>

</body>

</html>