
//basically this page will receive name,email,address,password,roll,phone from text field.
//here this is a registration page for a user;
//For Exapmle: http://localhost/zamzam/userregist2.php?name=maeen&email=maeenuddin&password=64640&Roll=678&phone=89039338&address=ctg


//Here unique key is roll number .So be carefull when you will give an existed roll number then this page will return you an error.This bug will be solved later.
s
<html>

<body>


<?php





$name=$_GET['name'];

$email=$_GET['email'];

$address=$_GET['address'];

$passwor=$_GET['password'];

$roll=$_GET['Roll'];
$phone=$_GET['phone'];


$servername = "localhost";
$username = "root";
$password = "";
$database = "zamzam";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


$sql = "INSERT INTO zamzamuser(name,email,address,password,Rollnumber,phone)
VALUES ('$name','$email','$address','$passwor','$roll','$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

  $userinfo[]=array(
  'name'=>$name,
  'roll'=>$roll,
  'email'=>$email,
  'address'=>$address,
  'password'=>$passwor,
  'phone'=>$phone
);
header('Content-Type: application/json');
$maeen=array("userregist"=>$userinfo);

echo json_encode($maeen);










} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>


</body>







</html>