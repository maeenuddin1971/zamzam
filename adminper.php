
//This page will not take data from any source.Basically here this page will show the admin //how much request is pending
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "zamzam";

$conn = new mysqli($servername, $username, $password, $database);




$sql = "SELECT * FROM zamzamadmin";

$result = mysqli_query($conn, $sql);


while ($row_user = mysqli_fetch_assoc($result))
{
    $userinfo[] = $row_user;
}


$maeen=array("needpermission"=>$userinfo);

header('Content-Type: application/json');

echo json_encode($maeen);

mysqli_close($conn);



?>



</body>

</html>