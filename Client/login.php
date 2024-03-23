<?php
session_start();

try {
    $db = new PDO("mysql:host=localhost;dbname=ami assurance", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["motdepasse"];

    $sql = "SELECT * FROM user WHERE email = ?";
    echo "Requête SQL : " . $sql . "<br>";

    $stmt = $db->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["motdepasse"])) {
        $_SESSION["user"] = $user["email"];
        header("Location: Home.php");
        exit();
    } else {
        echo "Erreur : Email ou mot de passe incorrect.";
    }
}

?>