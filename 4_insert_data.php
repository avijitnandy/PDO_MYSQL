<?php
$host = "localhost";
$dbname = "training";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    echo "Connected successfully <br>";
	
	$sql = "INSERT INTO users (firstname, lastname, email , reg_date) VALUES ('Riyad', 'Ahmed', 'riyad@w3xplorers.com' , '2015-10-06 00:00:00')";

    $conn->execute($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
	echo 'We\'re sorry  <br />';
    echo " Connection failed: " . $e->getMessage();
    }
	$conn = null;
?>