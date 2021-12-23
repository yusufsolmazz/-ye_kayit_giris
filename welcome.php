<?php 

require 'config.php';
session_start();
ob_start();

$query = $db->prepare("SELECT * FROM kullanici");
$query->execute();
$cek = $query->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $cek["user_name"]; ?></title>
</head>
<body>
    Hello <?php echo $cek["user_name"]; ?>
</body>
</html>