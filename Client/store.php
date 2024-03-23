<?php
$conn = new PDO("mysql:host=localhost;dbname=ami assurance", "root", "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Le formulaire est soumis !";

    $sql = "INSERT INTO user (nom, cin, email, motdepasse, phone, adresse, datenaissance, metier) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $req = $conn->prepare($sql);

    $req->execute([
        $_POST["nom"],
        $_POST["cin"],
        $_POST["email"],
        $_POST["motdepasse"],
        $_POST["phone"],
        $_POST["adresse"],
        $_POST["datedenaissance"],
        $_POST["metier"]
    ]);

    header("Location: Home.php");
    exit();
}
?>