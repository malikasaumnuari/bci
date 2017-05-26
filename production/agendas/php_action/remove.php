<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_agenda = $_POST['id_agenda'];

    $sql = "UPDATE agendas SET active = 2 WHERE id_agenda = {$id_agenda}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
