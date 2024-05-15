<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
   $code = $_POST["code"];
    $seance = $_POST["seance"];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exemple";
$conn = new mysqli($servername, $username, $password, $dbname);


$query = "SELECT * FROM verification ";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row['code']==null) {
    $message= "tros tard ";
} else {
$sql = "SELECT code FROM verification WHERE seance =$seance ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$it = $row["code"]; 
if($code==$it){
$update_sql = "UPDATE class SET seance_$seance = 'present' WHERE id = $id";//hadakhdam
$result = $conn->query($update_sql );
$message="present";
}
else{
    $update_sql = "UPDATE class SET seance_$seance = 'arnaqueur' WHERE id = $id";//hadakhdam
    $result = $conn->query($update_sql );
    $message="arnaqueur";
}
}}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>status</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="popup" id="popup">
            <img src="404-tick.png" loading="lazy" alt="404-tick" />
            <h2></h2>
            <p class="message"><?php echo"$message"?></p>
            <a href="etu.html" class="anchor_as_btn">ok</a>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>