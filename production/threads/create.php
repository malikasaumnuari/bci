<!DOCTYPE html>
<html>
<head>
    <title>Create Thread</title>

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
    <legend>Add Thread</legend>

    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Title Thread</th>
                <td><input type="text" name="title_thread" placeholder="title" /></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="date" name="date_thread" placeholder="Date_thread" /></td>
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
