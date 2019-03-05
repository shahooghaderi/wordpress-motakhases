<?php include "function.php";
$background='fff';
if (isset($_POST['bg'])){
     $background =set_background($_POST['background']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: <?php echo $background ?> ">
<?php if (is_user_logged_in()): ?>
    <p> helloo shahoo khoskele khoshandame kirkoloft kir deraz :)</p>
<?php else: ?>
<?php endif; ?>

<?php

$a = true;
switch ($a) {
    case true:
        echo "TRUE";
        break;
    case false:
        echo "FALSE";
        break;
    default:
        break;
}
?>
<form action="" method="post">
    <input type="radio" name="background" value="red">RED
    <input type="radio" name="background" value="green">GREEN
    <input type="radio" name="background" value="blue">BLUE

    <input type="submit" name="bg" value="send">
</form>

<?php for ($i = 0; $i <= 10; $i++): ?>
    <p><?php echo $i ?></p>
<?php endfor; ?>
</body>
</html>