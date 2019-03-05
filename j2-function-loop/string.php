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
</head>
<body>
<?php
$template="hello dear {name} , {email}";
?>
<?php foreach ($users as $user) :
    echo str_replace(array('{name}' , '{email}'),array($user['name'],$user['email']),$template).'<br>';
    ?>
<?php endforeach; ?>
</body>
</html>
