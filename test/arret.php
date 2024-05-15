<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exemple";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_del= "delete from verification ";

    $ajout_col = $conn->query($sql_del);

    $conn->close();


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="popup" id="popup">
            <img src="404-tick.png" loading="lazy" alt="404-tick" />
            <h2>Merci!</h2>
            <p class="message">vous avez terminé l'appel</p>
            <a href="prof.html" class="anchor_as_btn">ok</a>
            <a href="affiche.php" class="anchor_as_btn">Afficher list complete</a>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>