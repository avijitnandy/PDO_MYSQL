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
	
	// begin the transaction
    $conn->beginTransaction();
    // our SQL statememtns
    $conn->exec("INSERT INTO users (firstname, lastname, email , reg_date) VALUES ('Tamim', 'Iqbal', 'tamim@w3xplorers.com' , '2015-10-06 00:00:00')");
    $conn->exec("INSERT INTO users (firstname, lastname, email , reg_date) VALUES ('Sommya', 'Sarkar', 'sommya@w3xplorers.com' , '2015-10-06 00:00:00')");
    $conn->exec("INSERT INTO users (firstname, lastname, email , reg_date) VALUES ('Mosfiqur', 'Rahim', 'mosfiqur@w3xplorers.com' , '10-06-2015 00:00:00')");

    // commit the transaction
    $conn->commit();
	
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
	// roll back the transaction if something failed
    $conn->rollback();
	echo 'We\'re sorry  <br />';
    echo " Connection failed: " . $e->getMessage();
    }
	$conn = null;
?>