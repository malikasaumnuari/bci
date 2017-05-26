<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_thread = $_POST['id_thread'];

    $sql = "UPDATE threads SET active = 2 WHERE id_thread = {$id_thread}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
