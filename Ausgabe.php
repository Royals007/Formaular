<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$nachricht = $_POST['nachricht'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="FormularStyleSheet.css">
</head>
<body>
<h1>Wilkommen</h1>
<h3>Ihre Info im DB auch erflogreichend</h3>
<h4> Name: <?php echo "$name" ?></h4>
<h4> E-Mail: <?php echo "$email" ?></h4>
<h4> Nachricht: <?php echo "$nachricht" ?></h4>

</body>
</html>



