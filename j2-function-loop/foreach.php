<?php include "function.php";
$users=get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,td,tr,th{
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>kir or koos</th>
        <th>action</th>
    </tr>
    <?php if (is_array($users) && count($users)>0): ?>
     <?php foreach ($users as $user):?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['jensiat'] ?></td>
            <td>
                <a href="#">delete</a>
                <a href="#">edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else:?>
    <tr>
        <th colspan="5">هیچ اطلاعاتی یافت نشد.</th>
    </tr>
    <?php endif; ?>
</table>
</body>
</html>