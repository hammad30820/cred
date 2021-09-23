<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];

}
$result = mysqli_query($mysqli, "INSERT INTO `audit`(`username`, `audit`, `time`) VALUES ('$name','delete',NOW())");
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

