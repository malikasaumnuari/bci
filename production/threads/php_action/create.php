<?php

require_once '../../db_connect.php';

if($_POST) {
    $title_thread = $_POST['title_thread'];
	  $date_thread = $_POST['date_thread'];

    $sql = "INSERT INTO threads (id_thread, title_thread, date_thread, active) VALUES ('', '$title_thread', '$date_thread', 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
