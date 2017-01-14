<style>
table {
border-collapse: collapse;
}
th {
border:1px solid gray;

}
td {
border:1px solid gray;

}
</style>
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
	
	// where Clause 
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users WHERE firstname='Riyad'";
	
	
	// AND Operator
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users WHERE firstname='Riyad' AND id=1";
	
	// OR Operator
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users WHERE firstname='Riyad' OR id=13";
	
	// ORDER BY Syntax
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users ORDER BY firstname";
	
	// ORDER BY ASC | DESC
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users ORDER BY firstname DESC";
	
	// Limit
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users LIMIT 3";
	
	// Like
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users WHERE firstname LIKE '%r%'";
	
	// In
	// $sql = "SELECT id, firstname, lastname, email, reg_date FROM users WHERE firstname IN ('Riyad','Sakib')";
	
	// BETWEEN 
	 $sql = "SELECT id, firstname, lastname, email, reg_date FROM users WHERE id BETWEEN  1 AND 12 ";
	
	
	
	$stmt = $conn->prepare($sql);
    $stmt->execute();
	$results = $stmt->fetchAll();
	
	// Dispaly data into table
    echo "<table style='border: solid 1px black;'>
				  <thead>
					<tr>
					  <th>Id</th>
					  <th>First Name</th>
					  <th>Last Name </th>
					  <th>Eamil Address</th>
					  <th>Registration Date</th>
					</tr>
				  </thead>";
foreach ($results as $key => $value) {
  echo "<tbody>";
  echo "<td>" . $value['id'] . "</td>" ;
  echo "<td>" . $value['firstname'] . "</td>" ;
  echo "<td>" . $value['lastname'] . "</td>" ;
  echo "<td>" . $value['email'] . "</td>" ;
  echo "<td>" . $value['reg_date'] . "</td>" ;
  echo"</tbody>";
}
 echo"</table>";
    }
catch(PDOException $e)
    {
	echo 'We\'re sorry  <br />';
    echo " Connection failed: " . $e->getMessage();
    }
	$conn = null;
?>