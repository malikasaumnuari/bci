<!DOCTYPE html>
<html>
<head>
    <title>Create Comments</title>

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
    <legend>Add Comments</legend>

    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>ID Thread</th>
                <td><input type="number" name="id_thread" placeholder="id thread" /></td>
            </tr>
            <tr>
                <th>Comment</th>
                <td><textarea cols="50" rows="10" name="comment" value= "<?php echo $comment?>"/> </textarea></td>
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
