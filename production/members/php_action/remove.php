<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_member = $_POST['id_member'];

    $sql = "UPDATE members_community SET active = 2 WHERE id_member = {$id_member}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
