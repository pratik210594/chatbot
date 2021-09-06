<?php
//$a =$_GET['t'];

$host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "chatbot";
 
 $con = mysqli_connect($host,$username,$password,$dbname);

$message = $_POST['text'];
//$message = "How are you?";

$replysearch = "select * from queries where message='".$message."'";
//echo $replysearch;
$result = mysqli_query($con,$replysearch);

 
 if (mysqli_num_rows($result) > 0)
 {
	// echo "user exists";
	 
	while($row = mysqli_fetch_assoc($result))
	 
	 {
		
		 echo $row['answer'];
	 }
 }
 else
 {
	 echo "problem";
 }

?>
