<?php

require_once '../../db_connect.php';

if($_POST) {
    $name_agenda = $_POST['name_agenda'];
	  $date_agenda = $_POST['date_agenda'];
    $content_agenda = $_POST['content_agenda'];
    $absent = $_POST['absent'];

    $sql = "INSERT INTO agendas (id_agenda, name_agenda, date_agenda, content_agenda, absent, active) VALUES ('', '$name_agenda', '$date_agenda', '$content_agenda', '$absent', 1)";
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
