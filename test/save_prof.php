<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user   = $_POST["username"];
    $passwd = $_POST["password"];
    $code   = $_POST["code"]   ;
    $seance = $_POST["seance"]  ;
}

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "exemple";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM prof ";
$result = $conn->query($sql);
$row   = $result->fetch_assoc();
$v_user = $row["username"]; 


$v_passwd= $row["passwd"]; 


if($v_user==$user && $v_passwd==$passwd){
   
    $sql_alter= "alter table class add  COLUMN seance_$seance varchar(10) ";

    $ajout_col = $conn->query($sql_alter);
    

    $sql_update = "UPDATE class SET seance_$seance = 'absent'";

    $ajout_abs = $conn->query($sql_update);
    $ajout_code = "INSERT INTO verification VALUES ('$code', '$seance')";

    $insert_code=$conn->query($ajout_code);
    

    sleep(3);
    header("Location: http://localhost/test/arret.html");
    



}else{
    echo'<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Create a Modal Box In</title><link rel="stylesheet" href="style.css" /></head>
    <body><div class="container"><div class="popup" id="popup"><img src="error.png" loading="lazy" alt="404-tick" /><h2>Error!</h2><p class="message">Username ou password est incorrect</p><a href="prof.html" class="anchor_as_btn">ressayer</a></div></div><script src="main.js"></script></body></html>';
}


?>