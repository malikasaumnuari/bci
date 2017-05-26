<?php

require_once '../../db_connect.php';

if($_POST)
{
	$id_community = $_POST['id_community'];

	$sql = "UPDATE communities SET active = 2 WHERE id_community = {$id_community}";
	if($connect->query($sql) === TRUE)
	{
		echo "<p>Approved!</p>";
		echo "<a href='../index.php'><button type='button'>Commun</button></a>";
		echo "<a href='../../../home.php'><button type='button'>Home</button></a>";
	}
	else
	{
		echo "Approve Failed : " . $connect->error;
	}

	$connect->close();
}
?>
