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
	
	$sql = "INSERT INTO users (firstname, lastname, email , reg_date) VALUES ('Sakib', 'Al Hasan', 'sakib@w3xplorers.com' , '2015-10-06 00:00:00')";

    $conn->exec($sql);
    echo "New record created successfully";
	
	
	 $last_id = $conn->lastInsertId();
    echo " Last inserted ID is: " . $last_id;
    }
catch(PDOException $e)
    {
	echo 'We\'re sorry  <br />';
    echo " Connection failed: " . $e->getMessage();
    }
	$conn = null;
?>