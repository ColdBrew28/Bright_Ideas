<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "bookstore";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from bookstore WHERE email = '".$email."' and 
password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
		window.location.replace("shop.html");
	</script>
	
	<?php
}
else{
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}


?>