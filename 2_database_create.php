<?php
$host = "localhost";
$dbname = "training";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully to the MySQl <br>";
	
	$sql = "CREATE DATABASE training";
	$conn->exec($sql);
	echo " Database Created Successfully";
    }
catch(PDOException $e)
    {
	echo 'We\'re Sorry <br />';
    echo "Failed: " . $e->getMessage();
    }
	$conn = null;
?>