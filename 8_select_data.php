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
	
	$sql = "SELECT id, firstname, lastname, email, reg_date FROM users";
	$stmt = $conn->prepare($sql);
    $stmt->execute();
	$results = $stmt->fetchAll();
	
foreach ($results as $key => $value) {

  echo " Id = " . $value['id']  ;
  echo " First Name = " . $value['firstname'] ;
  echo " Last Name = " . $value['lastname'];
  echo " Email Address = " . $value['email'];
  echo " Registration Date = " . $value['reg_date'];
  echo "<br/>"; 

}

    }
catch(PDOException $e)
    {
	echo 'We\'re sorry  <br />';
    echo " Connection failed: " . $e->getMessage();
    }
	$conn = null;
?>