<?php
// Start the session
session_start();

$conn = new PDO("mysql:host=localhost;dbname=ami assurance", "root", "");

// Assuming you are handling form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["motdepasse"];

    // Check if the user already exists in the database
    $sqlCheck = "SELECT email FROM user WHERE email = ?";
    $reqCheck = $conn->prepare($sqlCheck);
    $reqCheck->execute(array($email));

    if ($reqCheck->rowCount() > 0) {
        // User already exists, set email in the session
        $_SESSION["user"] = $email;
    } else {
        unset($_SESSION["user"]); // unset the session variable if the user does not exist
        // User does not exist, handle accordingly
        echo "User does not exist.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMI Assurance</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link href="style.css" rel="stylesheet" />
</head>




<body>
    <form role="form" action="index.php" method="post">
        <section class="hero is-info is-fullheight">
            <div class="hero-head">
                <nav class="navbar">
            </div>
            </div>
            <?php if (isset($_SESSION["user"])): ?>
                <div class="s1" style="font-size:50px;">
                    Bienvenue:
                    <?php echo $_SESSION["user"]; ?>
                </div>
            <?php else: ?>
                <div class="s1">
                    User not set in the session.
                </div>
            <?php endif; ?>
        </section>
    </form>