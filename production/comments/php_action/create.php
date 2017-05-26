<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_thread = $_POST['id_thread'];
	  $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (id_comment, id_thread, comment, active) VALUES ('', '$id_thread', '$comment', 1)";
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
