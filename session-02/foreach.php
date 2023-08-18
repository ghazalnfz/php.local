<?php

include "functions.php";

$users = get_users();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="border:1px solid #000;">
    <tr style="border:1px solid #000;" >
        <th style="border:1px solid #000;">id</th>
        <th style="border:1px solid #000;">name</th>
        <th style="border:1px solid #000;">email</th>
        <th style="border:1px solid #000;">actions</th>
    </tr>

<?php
    foreach($users as $user):
?>
    <tr style="border:1px solid #000;">
        <td style="border:1px solid #000;"><?php echo $user['id'] ?></td>
        <td style="border:1px solid #000;"><?php echo $user['name'] ?></td>
        <td style="border:1px solid #000;"><?php echo $user['email'] ?></td>
        <td style="border:1px solid #000;">
            <a href="">delete</a>
            <a href="">edit</a>
            <a href="">approve</a>
        </td>
    </tr>

<?php

    endforeach;

?>

</table>
</body>
</html>
