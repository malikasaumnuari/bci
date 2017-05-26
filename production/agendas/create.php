<!DOCTYPE html>
<html>
<head>
    <title>Create Agenda</title>

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>

</head>
<body>

<fieldset>
    <legend>Add Agenda</legend>

    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Name Agenda</th>
                <td><input type="text" name="name_agenda" placeholder="name" /></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="date" name="date_agenda" placeholder="date_agenda" /></td>
            </tr>
            <tr>
                <th>Content Agenda</th>
                <td><textarea cols="50" rows="10" name="comment" value= "<?php echo $comment?>"/> </textarea></td>
            </tr>
            <tr>
                <th>Absent</th>
                <td><input type="text" name="absent" placeholder="absent" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

</fieldset>

</body>
</html>
