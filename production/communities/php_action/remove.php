<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_community = $_POST['id_community'];

    $sql = "UPDATE communities SET active = 2 WHERE id_community = {$id_community}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
