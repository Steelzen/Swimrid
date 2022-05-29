<!-- connect query to database-->

<?php

$servername = "127.0.0.1";
$username = "s3059282";
$password = "metsifir";
$dbname = "s3059282";

$conn = mysqli_connect($servername, $username, $password, $dbname) or 
        die("Connection failed because ".mysqli_connect_error());

?>