<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_comment = $_POST['id_comment'];

    $sql = "UPDATE comments SET active = 2 WHERE id_comment = {$id_comment}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
