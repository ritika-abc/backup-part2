<?php
$conn = "";
try {
$servername = "127.0.0.1:3306";
$username = "u496524825_medicine22";
$password = "Ajay@1234usdd";
$dbname = "u496524825_medicine22";
	$conn = new PDO(
		"mysql:host=$servername; dbname=u496524825_medicine22",
		$username, $password
	);
$conn->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
<?php
function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM `customers` WHERE username='$username' AND status='admin'");
	$stmt->execute();
	$users = $stmt->fetchAll();
		foreach($users as $user) {
				if(($user['username'] == $username) &&
		($user['password'] == $password)) {
				  // Session Variables are created
				  $_SESSION["user"] = $username;  
			  // Login time is stored in a session variable
				  $_SESSION["login_time_stamp"] = time(); 
				header("location: index.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}
?>
