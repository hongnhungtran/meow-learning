<?php

$servername = "localhost";
$username = "id2860296_hongnhungtran";
$password = "kei01051984";
$dbname = "id2860296_meowlearning";

try {
    	$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

?>