
//Here i haven't done any json array . But if later i give a text of the user expected friend unique roll number then it will fetch from the database and will return an array that if he is friend or not
//here by default I assumed that user unique roll is 1503001


<html>

<body>

<form action="userreq.php" method="POST">
	
<input type="text" name="roll" id="roll"><br>

<button type="submit" id="Submitted" name='Submitted' value="Login">Submit</button>

</form>


<?php

if (isset($_POST['Submitted']))
{
$roll=$_POST['roll'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "zamzam";

$conn = new mysqli($servername, $username, $password, $database);




$sql = "SELECT * FROM zamzamuser WHERE Rollnumber='$roll' ";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count == 1) {
         echo "user have been found";

         $sql2 = "SELECT * FROM zamzamfriend WHERE froll='$roll' AND sroll='1503001' ";
         $sql3 = "SELECT * FROM zamzamfriend WHERE sroll='$roll' AND froll='1503001' ";

         $result1 = mysqli_query($conn,$sql2);
		 $count1 = mysqli_num_rows($result1);

		 $result2 = mysqli_query($conn,$sql3);
         $count2 = mysqli_num_rows($result2);

         echo "<br>";
         if($count1==1 OR $count2==1)
         {
         	echo "they are friend ";
         }
         else
         {
         	echo "they are not friend";

         	echo ("<form action='userreq.php' method='POST'>
         		<button type='submit' id='Submi' name='Submi' value='Submi'>CLick to Friend Request</button></form>") ; 

         	if (isset($_POST['Submi']))
         	{
          //echo "sdlfkslkfj";
         	$sql3 = "INSERT into zamzamadmin(froll,sroll) VALUES('1503001','$roll')  ";

         	if ($conn->query($sql3) === TRUE) {
  			echo "New record created successfully";
			} else {
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

         }



      }else {
     echo "Your phone number and email are not valid";
      }


}

?>




</body>
</html>
