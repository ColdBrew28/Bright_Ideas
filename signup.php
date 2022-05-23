<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "bookstore";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO bookstore (firstname, lastname, name, email, password) 
VALUES ('$firstname', '$lastname', '$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
		window.location.replace("shop.html");
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>




















