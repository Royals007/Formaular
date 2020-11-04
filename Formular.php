<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="FormularStyleSheet.css">
</head>
<body>
<div class = 'container'>
    <!--Erstellt die benötigen Info Name, E-Mail, Nachricht..-->
    <form method="post" action="Ausgabe.php">
        <h2>Formular</h2>
        <label> Name: </label>
        <label><input type="text" placeholder="Bitte Ihr Name Schreiben" name="name"  required></label> <br> <br>

        <label>E-Mail: </label>
        <label><input type="text" placeholder="beispiel@gmx.de" name="email" required></label> <br> <br>

        <label>Nachricht: </label>
        <label><textarea name="nachricht" placeholder="Was möchtest du sagen!" rows="9" cols="32" required></textarea></label>
        <label><input type="submit"  name= "submit" value="Send" ></label>

    </form>
</div>
</body>
</html>




