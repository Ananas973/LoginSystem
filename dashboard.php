<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tableau de bord - Anansi Mpangi</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hotep, <?php echo $_SESSION['username']; ?>!</p>
        <p>Gère ton business !</p>
        <p><a href="logout.php">Déconnexion</a></p>
    </div>
</body>
</html>

