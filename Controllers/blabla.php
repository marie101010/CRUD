<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Ma première insertion en base de donnée</title>
<meta charset="UTF-8">
</head>
<body>
    <form action="update_ctrl.php" method="post">
        <input type="text" name="pseudo">
        <input type="text" name="mot_de_passe">
        <input type="submit" value="envoyer">
    </form>
</body>
</html>
