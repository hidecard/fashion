<?php
include("db.php");
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		header("Location: user_list.php");
	}
	else
	{
		die("Error: ".mysqli_error($conn));
	}
}
else
{
	header("Location: user_list.php");
}
?>