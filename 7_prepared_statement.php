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
	
	$sql = "INSERT INTO users (firstname, lastname, email , reg_date) VALUES (:firstname, :lastname, :email, :reg_date)";
    $stmt = $conn->prepare($sql);
	
	//bind the parameters
	$stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
	$stmt->bindParam(':reg_date', $reg_date);
	
	
	// insert the value to the bind variables
    $firstname = "Mominul";
    $lastname = "Haque";
    $email = "mominul@example.com";
	$reg_date = "2015-10-06 00:00:00";
	
    $stmt->execute();
	
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
	echo 'We\'re sorry  <br />';
    echo " Connection failed: " . $e->getMessage();
    }
	$conn = null;
?>