<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $password]);

    echo "Utilisateur créé avec succès";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Enregistrer</title>
</head>
<body>

<h2>Inscription</h2>

<form method="POST">
    <label>Nom d'utilisateur</label><br>
    <input type="text" name="username" required>
    <br><br>

    <label>Mot de passe</label><br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">S'inscrire</button>
</form>

</body>
</html>